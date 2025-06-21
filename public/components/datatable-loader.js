async function loadTableContent(table) {
    const mainContent = document.querySelector('.main-content');
    if (!mainContent) {
        console.error('Element .main-content tidak ditemukan.');
        return;
    }

    function renderTableHeaders(columns) {
        if (!Array.isArray(columns)) return;
        const theadHtml = columns.map(column => {
            return `<th>${column.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase())}</th>`;
        }).join('');
        $(`#${table}Table thead tr`).html(`<th>Actions</th>${theadHtml}`);
    }

    function createColumns(serverColumns) {
        if (!Array.isArray(serverColumns)) return [];

        const looksLikeDate = (value) => {
            if (typeof value !== 'string') return false;
            const patterns = [
                /^\d{4}-\d{2}-\d{2}$/, /^\d{4}\/\d{2}\/\d{2}$/,
                /^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}/, /^\d{4}-\d{2}-\d{2} \d{2}:\d{2}(:\d{2})?$/,
                /^\d{2}-\d{2}-\d{4}$/, /^\d{4}\.\d{2}\.\d{2}$/
            ];
            return patterns.some(pattern => pattern.test(value)) && !isNaN(Date.parse(value));
        };

        const getNestedValue = (obj, path) => path.split('.').reduce((acc, part) => acc?.[part], obj);

        const columns = serverColumns.map(column => ({
            data: column,
            name: column,
            render: function (data, type, row) {
                const value = getNestedValue(row, column);
                if (looksLikeDate(value)) {
                    const date = new Date(value);
                    const hasTime = value.includes('T') || value.includes(' ');
                    return date.toLocaleString('id-ID', {
                        day: '2-digit', month: 'long', year: 'numeric',
                        ...(hasTime && { hour: '2-digit', minute: '2-digit', hour12: false })
                    });
                }
                return value ?? '';
            }
        }));

        columns.unshift({
            data: null,
            name: 'actions',
            render: function (data, type, row) {
                const id = row[`id_${table}`] || row['id'];
                return `<div class="d-inline-flex gap-1">
                    <button class="btn btn-outline-warning btn-sm edit-btn-${table}" data-id="${id}">Edit</button>
                    <button class="btn btn-outline-danger btn-sm delete-btn-${table}" data-id="${id}">Delete</button>
                </div>`;
            }
        });

        return columns;
    }

    function showSuccessAlert(message) {
        Swal.fire({ icon: 'success', title: 'Berhasil!', text: message, timer: 2000, showConfirmButton: false });
    }

    function handleAjaxError(xhr, formType) {
        $(`.${formType}-form .invalid-feedback`).text('').hide();
        $(`.${formType}-form input, .${formType}-form select, .${formType}-form textarea`).removeClass('is-invalid');

        if (xhr?.responseJSON?.errors) {
            Object.entries(xhr.responseJSON.errors).forEach(([field, messages]) => {
                const sanitizedField = field.replace(/\./g, '_');
                const input = $(`.${formType}-form [name="${field}"], .${formType}-form [name="${sanitizedField}"]`);
                const errorDiv = $(`#${formType}-error-${field}, #${formType}-error-${sanitizedField}`);

                input.addClass('is-invalid');
                if (errorDiv.length) {
                    errorDiv.text(messages[0]).show();
                } else {
                    input.after(`<div class="invalid-feedback d-block">${messages[0]}</div>`);
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Terjadi Kesalahan',
                text: xhr?.responseJSON?.message || 'Terjadi kesalahan pada server.'
            });
        }
    }

    try {
        let pencarian = "";
        
        // Load initial HTML content
        const response = await fetch(`/ajax/${table.replace(/_/g, '-')}`);
        if (!response.ok) throw new Error('Gagal mengambil konten dashboard.');
        const html = await response.text();
        mainContent.innerHTML = html;
        
        // Initialize AOS
        await new Promise(resolve => setTimeout(resolve, 10));
        AOS.init({ once: true });
        
        // Get columns data
        const json = await $.ajax({
            url: `/${table.replace(/_/g, '-')}/create`,
            type: 'POST',
            data: {
                _token: document.querySelector('meta[name="csrf-token"]')?.content || '',
                pencarian: pencarian,
                columns: 'columns'
            }
        });
        
        // Render table headers
        renderTableHeaders(json.columns);
        
        // Initialize DataTable
        const dataTable = $(`#${table}Table`);
        if (dataTable.length) {
            dataTable.DataTable({
                processing: true,
                serverSide: true,
                destroy: true,
                scrollX: true,
                initComplete: function () { $('.dt-search').hide(); },
                ajax: {
                    url: `/${table.replace(/_/g, '-')}/create`,
                    type: 'POST',
                    data: function (d) {
                        d._token = document.querySelector('meta[name="csrf-token"]')?.content || '';
                        d.pencarian = pencarian;
                        d.start = d.start || 0;
                        d.length = d.length || 10;
                    },
                    dataSrc: json => json.data || []
                },
                columns: createColumns(json.columns),
                pageLength: 10
            });
        }
        
        // Set up event handlers
        const modalPrefix = `#${table}`;

        $(`#add-btn-${table}`).off('click').on('click', function () {
            $(`${modalPrefix}AddForm`).attr('action', `/${table.replace(/_/g, '-')}/store`);
            const addModalEl = document.querySelector(`${modalPrefix}AddModal`);
            if (addModalEl) bootstrap.Modal.getOrCreateInstance(addModalEl).show();
        });

        $(`${modalPrefix}AddForm`).off('submit').on('submit', async function (e) {
            e.preventDefault();
            const form = $(this);
            try {
                const response = await $.post({
                    url: form.attr('action'),
                    data: form.serialize(),
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                    }
                });
                
                const modalEl = document.querySelector(`${modalPrefix}AddModal`);
                setTimeout(() => {
                    if (document.activeElement) {
                        document.activeElement.blur();
                    }
                    document.body.focus();
            
                    const modalInstance = bootstrap.Modal.getInstance(modalEl);
                    if (modalInstance) modalInstance.hide();
            
                    $(`#${table}Table`).DataTable().ajax.reload(null, false);
                    showSuccessAlert(response?.message || 'Data berhasil ditambahkan!');
                }, 50);
            } catch (xhr) {
                handleAjaxError(xhr, 'add');
            }
        });

        $(document).off('click', `.edit-btn-${table}`).on('click', `.edit-btn-${table}`, async function () {
            const id = $(this).data('id');
            try {
                const data = await $.get(`/${table.replace(/_/g, '-')}/edit/${id}`);
                if (data?.data) {
                    const form = $(`${modalPrefix}EditForm`);
                    Object.entries(data.data).forEach(([key, value]) => {
                        if (!['id', 'created_at', 'updated_at'].includes(key)) {
                            form.find(`[name='${key}']`).val(value);
                        }
                    });
                    form.attr('action', `/${table.replace(/_/g, '-')}/update/${id}`);
                    const editModalEl = document.querySelector(`${modalPrefix}EditModal`);
                    if (editModalEl) bootstrap.Modal.getOrCreateInstance(editModalEl).show();
                }
            } catch (xhr) {
                handleAjaxError(xhr, 'edit');
            }
        });

        $(`${modalPrefix}EditForm`).off('submit').on('submit', async function (e) {
            e.preventDefault();
            const form = $(this);
            try {
                const response = await $.post({
                    url: form.attr('action'),
                    data: form.serialize(),
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                    }
                });
                
                const modalEl = document.querySelector(`${modalPrefix}EditModal`);
                setTimeout(() => {
                    if (document.activeElement) {
                        document.activeElement.blur();
                    }
                    document.body.focus();
            
                    const modalInstance = bootstrap.Modal.getInstance(modalEl);
                    if (modalInstance) modalInstance.hide();
            
                    $(`#${table}Table`).DataTable().ajax.reload(null, false);
                    showSuccessAlert(response?.message || 'Data berhasil diperbarui!');
                }, 50);
            } catch (xhr) {
                handleAjaxError(xhr, 'edit');
            }
        });

        let selectedRow;
        $(document).off('click', `.delete-btn-${table}`).on('click', `.delete-btn-${table}`, function () {
            const id = $(this).data('id');
            selectedRow = $(this).closest('tr');
            $(`#${table}DeleteForm`).attr('action', `/${table.replace(/_/g, '-')}/delete/${id}`);
            const deleteModalEl = document.querySelector(`#${table}DeleteModal`);
            if (deleteModalEl) bootstrap.Modal.getOrCreateInstance(deleteModalEl).show();
        });

        $(`#${table}DeleteForm`).off('submit').on('submit', async function (e) {
            e.preventDefault();
            const form = $(this);
            try {
                const response = await $.post({
                    url: form.attr('action'),
                    data: form.serialize(),
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                    }
                });
                
                $(`#${table}Table`).DataTable().row(selectedRow).remove().draw();
                bootstrap.Modal.getInstance(document.querySelector(`#${table}DeleteModal`)).hide();
                showSuccessAlert(response?.success || 'Data berhasil dihapus!');
            } catch (xhr) {
                handleAjaxError(xhr, 'delete');
            }
        });
    } catch (error) {
        console.error(error);
        mainContent.innerHTML = `<div class="error">Terjadi kesalahan: ${error.message}</div>`;
    }
}