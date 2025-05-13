<script>
    // Utility functions
    function getSafeValue(value, defaultValue = '') {
        return value ?? defaultValue;
    }

    function setActiveSidebarItem(table) {
        // Remove active class from all menu items
        $('.sidebar-menu a').removeClass('active');

        // Add active class to current menu item
        $(`.sidebar-menu a[href="/${table}"]`).addClass('active');

        // Open parent submenu if exists
        $(`.sidebar-menu a[href="/${table}"]`).closest('.has-submenu').addClass('open');
    }

    function initializeApp(table) {
        // Validate table parameter
        if (!table || typeof table !== 'string') {
            console.error('Invalid table parameter');
            return;
        }

        // Set active sidebar item
        setActiveSidebarItem(table);

        // Initialize AOS (Animate On Scroll)
        if (typeof AOS !== 'undefined') {
            AOS.init({
                once: true
            });
        }

        // Sidebar Submenu Toggle
        $('.menu-item.has-submenu > a').off('click').on('click', function(e) {
            e.preventDefault();
            $(this).parent().toggleClass('open');
            $(this).find('.menu-arrow').toggleClass('rotate-180');
        });

        // Table configuration
        function createColumns(serverColumns) {
            if (!Array.isArray(serverColumns)) return [];

            const columns = serverColumns.map(function(column) {
                return {
                    data: column,
                    name: column
                };
            });

            columns.unshift({
                data: null,
                name: 'actions',
                render: function(data, type, row) {
                    const id = row['id_' + table] || '';
                    return `
                    <div class="d-inline-flex gap-1">
                        <button 
                            class="btn btn-outline-warning btn-sm edit-btn-${table}" 
                            data-id="${id}" 
                            data-bs-toggle="modal" 
                            data-bs-target="#editModal">
                            Edit
                        </button>
                        <button 
                            class="btn btn-outline-danger btn-sm delete-btn-${table}" 
                            data-id="${id}" 
                            data-bs-toggle="modal" 
                            data-bs-target="#deleteModal">
                            Delete
                        </button>
                    </div>
                    `;
                }
            });

            return columns;
        }

        function renderTableHeaders(columns, tableId) {
            if (!Array.isArray(columns) || !tableId) return;

            try {
                const theadHtml = columns.map(column => {
                    const label = typeof column === 'string' ?
                        column.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase()) :
                        '';
                    return `<th>${label}</th>`;
                }).join('');

                const fullThead = `<th>Actions</th>${theadHtml}`;
                const tableHeader = $(`#${tableId}Table thead tr`);

                if (tableHeader.length) {
                    tableHeader.html(fullThead);
                }
            } catch (error) {
                console.error('Error rendering table headers:', error);
            }
        }

        // Initialize DataTable
        let pencarian = "";
        $.ajax({
            url: "/" + table.replace(/_/g, '-') + "/create",
            type: "POST",
            data: {
                _token: getSafeValue($('meta[name="csrf-token"]').attr('content'), ''),
                pencarian: pencarian,
                columns: 'columns'
            },
            success: function(json) {
                if (json && json.columns) {
                    renderTableHeaders(json.columns, table);

                    const dataTable = $(`#${table}Table`);
                    if (dataTable.length) {
                        dataTable.DataTable({
                            processing: true,
                            serverSide: true,
                            destroy: true,
                            scrollX: true,
                            initComplete: function() {
                                $('.dt-search').hide();
                            },
                            ajax: {
                                url: "/" + table.replace(/_/g, '-') + "/create",
                                type: "POST",
                                data: function(d) {
                                    d._token = getSafeValue($('meta[name="csrf-token"]').attr(
                                        'content'), '');
                                    d.pencarian = pencarian;
                                    d.start = d.start || 0;
                                    d.length = d.length || 10;
                                },
                                dataSrc: function(json) {
                                    return json.data || [];
                                }
                            },
                            columns: createColumns(json.columns),
                            pageLength: 10
                        });
                    }
                }
            },
            error: function(xhr) {
                console.error('Error loading table data:', xhr.responseText);
            }
        });

        // Add New Record
        $(`#add-btn-${table}`).off('click').on('click', function() {
            const createFormSelector = `#${table}AddForm`;
            const createModalSelector = `#${table}AddModal`;

            if ($(createFormSelector).length && $(createModalSelector).length) {
                $(createFormSelector).attr('action', `/${table}/store`);
                $(createModalSelector).modal('show');
            }
        });

        $(`#${table}AddForm`).off('submit').on('submit', function(e) {
            e.preventDefault();
            const url = $(this).attr('action');
            const formData = $(this).serialize();

            if (!url) return;

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': getSafeValue($('meta[name="csrf-token"]').attr('content'), '')
                },
                success: function(response) {
                    $(`#${table}AddModal`).modal('hide');
                    $(`#${table}Table`).DataTable().ajax.reload(null, false);

                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: response?.message || 'Data berhasil ditambahkan!',
                        timer: 2000,
                        showConfirmButton: false
                    });
                },
                error: function(xhr) {
                    console.error('Error:', xhr?.responseJSON || xhr.responseText);
                    alert('Terjadi kesalahan saat menambah data.');
                }
            });
        });

        // Edit Record
        $(document).off('click', `.edit-btn-${table}`).on('click', `.edit-btn-${table}`, function() {
            const id = $(this).data('id');
            const formSelector = `#${table}EditForm`;
            const modalSelector = `#${table}EditModal`;

            if (!id || !$(formSelector).length || !$(modalSelector).length) return;

            $.get(`/${table}/edit/${id}`, function(data) {
                if (data?.data) {
                    const record = data.data;
                    <?php $__currentLoopData = $columns ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(!($index === 0 || in_array($column, ['created_at', 'updated_at']))): ?>
                            $(`${formSelector} [name='<?php echo e($column); ?>']`).val(record[
                                "<?php echo e($column); ?>"]);
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    $(formSelector).attr('action', `/${table}/update/${id}`);
                    $(modalSelector).modal('show');
                }
            }).fail(function(xhr) {
                console.error('Error loading edit data:', xhr.responseText);
            });
        });

        $(`#${table}EditForm`).off('submit').on('submit', function(e) {
            e.preventDefault();
            const url = $(this).attr('action');
            const formData = $(this).serialize();

            if (!url) return;

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': getSafeValue($('meta[name="csrf-token"]').attr('content'), '')
                },
                success: function(response) {
                    $(`#${table}EditModal`).modal('hide');
                    $(`#${table}Table`).DataTable().ajax.reload(null, false);

                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: response?.message || 'Data berhasil diperbarui!',
                        timer: 2000,
                        showConfirmButton: false
                    });
                },
                error: function(xhr) {
                    console.error('Error:', xhr?.responseJSON || xhr.responseText);
                    alert('Terjadi kesalahan saat memperbarui data.');
                }
            });
        });

        // Delete Record
        let selectedRow;
        $(document).off('click', `.delete-btn-${table}`).on('click', `.delete-btn-${table}`, function() {
            const userId = $(this).data('id');
            const deleteForm = $(`#${table}DeleteForm`);
            const deleteModal = $(`#${table}DeleteModal`);

            if (!userId || !deleteForm.length || !deleteModal.length) return;

            selectedRow = $(this).closest('tr');
            deleteForm.attr('action', `/${table.replace(/_/g, '-')}/delete/${userId}`);
            deleteModal.modal('show');
        });

        $(`#${table}DeleteForm`).off('submit').on('submit', function(e) {
            e.preventDefault();
            const url = $(this).attr('action');
            const formData = $(this).serialize();

            if (!url || !selectedRow) return;

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': getSafeValue($('meta[name="csrf-token"]').attr('content'), '')
                },
                success: function(response) {
                    const dataTable = $(`#${table}Table`).DataTable();
                    if (dataTable) {
                        dataTable.row(selectedRow).remove().draw();
                    }
                    $(`#${table}DeleteModal`).modal('hide');

                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: response?.success || 'Data berhasil dihapus!',
                        timer: 2000,
                        showConfirmButton: false
                    });
                },
                error: function(xhr) {
                    console.error('Error:', xhr.responseText);
                }
            });
        });

        // Header scroll effect
        $(window).off('scroll').on('scroll', function() {
            $('.header').toggleClass('scrolled', $(this).scrollTop() > 10);
        });

        // Search functionality
        $('#searchInput').off('input').on('input', function() {
            const searchTerm = $(this).val().toLowerCase();
            if (searchTerm.length > 2) {
                console.log('Searching for:', searchTerm);
            }
        });

        // Notification dropdown
        $('#notificationBtn').off('click').on('click', function() {
            alert('Notifications would appear here');
        });

        // User profile dropdown
        $('#userBtn').off('click').on('click', function() {
            alert('User menu would appear here');
        });
    }

    // Initialize the app when document is ready
    $(document).ready(function() {
        <?php if(isset($table)): ?>
            initializeApp("<?php echo e($table); ?>");
        <?php endif; ?>
    });



    // Content loading function
    // Content loading function
    function loadContent(event, element, tabel) {
        event?.preventDefault();

        if (!element || !tabel) {
            console.error('Invalid parameters');
            return;
        }

        const mainContent = document.querySelector('.main-content');

        if (!mainContent) {
            console.error('Main content element not found');
            return;
        }

        mainContent.innerHTML = '<div class="loading">Loading...</div>';

        // Gunakan GET untuk dashboard, POST untuk yang lain
        const requestOptions = {
            method: tabel === 'dashboard' ? 'GET' : 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': getSafeValue($('meta[name="csrf-token"]').attr('content'), '')
            }
        };

        // Hanya tambahkan body untuk non-dashboard
        if (tabel !== 'dashboard') {
            requestOptions.body = JSON.stringify({
                table: tabel
            });
        }

        const url = tabel === 'dashboard' ? '/dashboard' : '/ajax';

        fetch(url, requestOptions)
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.text();
            })
            .then(html => {
                if (html) {
                    mainContent.innerHTML = html;
                    history.pushState({}, '', '/' + tabel);

                    // Set active sidebar item
                    setActiveSidebarItem(tabel);

                    initializeApp(tabel);

                    if (tabel === 'dashboard') {
                        initDashboard();
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                mainContent.innerHTML = `<div class="error">Error loading content: ${error.message}</div>`;
            });
    }

    // Handle popstate event
    window.addEventListener('popstate', function() {
        const path = window.location.pathname.substring(1);
        const element = document.querySelector(`.sidebar-menu a[href="/${path}"]`);

        if (element) {
            loadContent({
                preventDefault: () => {}
            }, element, path);
        }
    });

    function initDashboard() {
        // Initialize DataTable
        $('#ordersTable').DataTable({
            responsive: true,
            dom: '<"top"f>rt<"bottom"lip><"clear">',
            pageLength: 5,
            lengthMenu: [5, 10, 25, 50],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search orders...",
            }
        });

        // Revenue Chart
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Revenue',
                    data: [12000, 19000, 15000, 22000, 24560, 18000, 21000],
                    backgroundColor: 'rgba(99, 102, 241, 0.1)',
                    borderColor: 'rgba(99, 102, 241, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            drawBorder: false,
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            callback: function(value) {
                                return '$' + value.toLocaleString();
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                },
                interaction: {
                    mode: 'nearest',
                    axis: 'x',
                    intersect: false
                }
            }
        });

        // Traffic Chart
        const trafficCtx = document.getElementById('trafficChart').getContext('2d');
        const trafficChart = new Chart(trafficCtx, {
            type: 'doughnut',
            data: {
                labels: ['Direct', 'Organic', 'Referral', 'Social'],
                datasets: [{
                    data: [45, 30, 15, 10],
                    backgroundColor: [
                        'rgba(99, 102, 241, 0.8)',
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(245, 158, 11, 0.8)',
                        'rgba(239, 68, 68, 0.8)'
                    ],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Chart hover info
        const chartHoverInfo = document.getElementById('chartHoverInfo');
        document.getElementById('revenueChart').addEventListener('mousemove', function(evt) {
            const points = revenueChart.getElementsAtEventForMode(evt, 'nearest', {
                intersect: false
            }, true);
            if (points.length) {
                const point = points[0];
                const value = revenueChart.data.datasets[point.datasetIndex].data[point.index];
                const label = revenueChart.data.labels[point.index];

                chartHoverInfo.classList.add('visible');
                chartHoverInfo.textContent = `${label}: $${value.toLocaleString()}`;
                chartHoverInfo.style.left = `${evt.offsetX + 20}px`;
                chartHoverInfo.style.top = `${evt.offsetY}px`;
            } else {
                chartHoverInfo.classList.remove('visible');
            }
        });

        document.getElementById('revenueChart').addEventListener('mouseout', function() {
            chartHoverInfo.classList.remove('visible');
        });

    }

    // Initialize on DOMContentLoaded
    document.addEventListener('DOMContentLoaded', function() {
        const initialLink = document.querySelector('.sidebar-menu a.active') ||
            document.querySelector('.sidebar-menu a');
        if (initialLink) {
            const table = initialLink.getAttribute('href')?.substring(1);
            if (table) {
                loadContent({
                    preventDefault: () => {}
                }, initialLink, table);
            }
        }
    });
</script>
<?php /**PATH /var/www/my-core-pustu/resources/views/partials/script-dinamis.blade.php ENDPATH**/ ?>