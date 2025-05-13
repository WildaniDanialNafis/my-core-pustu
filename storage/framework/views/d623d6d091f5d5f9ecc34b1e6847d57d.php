<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('assets/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('assets/css/sb-admin-2.min.css')); ?>" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .sidebar-divider {
            background-color: #eaecf4 !important;
            border: none !important;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php echo $__env->make('admin.layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php echo $__env->make('admin.layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>

            </div>
            <!-- End of Main Content -->

            <?php echo $__env->make('admin.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form method="POST" action="<?php echo e(route('logout')); ?>" id="logout-form">
                        <?php echo csrf_field(); ?>
                    </form>
                    <a class="btn btn-primary" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo e(asset('assets/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript -->
    <script src="<?php echo e(asset('assets/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages -->
    <script src="<?php echo e(asset('assets/js/sb-admin-2.min.js')); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo e(asset('assets/vendor/chart.js/Chart.min.js')); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo e(asset('assets/js/demo/chart-area-demo.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/demo/chart-pie-demo.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/demo/chart-bar-demo.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Load DataTables -->
    <script src="https://cdn.datatables.net/v/bs5/dt-2.2.2/datatables.min.js"
        integrity="sha384-k90VzuFAoyBG5No1d5yn30abqlaxr9+LfAPp6pjrd7U3T77blpvmsS8GqS70xcnH" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    
    <script>
        function myFunc2(pencarian = '') {
            let table = '';
            <?php if(isset($table)): ?>
                table = <?php echo json_encode($table, 15, 512) ?>
            <?php endif; ?>
    
            function buatColumns(serverColumns) {
                const columns = serverColumns.map(function(column) {
                    return {
                        data: column,
                        name: column
                    };
                });
    
                columns.push({
                    data: null,
                    name: 'actions',
                    render: function(data, type, row) {
                        return '<button class="btn btn-warning btn-sm edit-btn-' + table + '" data-id="' +
                            row['id_' + table] + '">Edit</button>' +
                            '<button class="ms-1 btn btn-danger btn-sm delete-btn-' + table + '" data-id="' +
                            row['id_' + table] + '">Delete</button>';
                    }
                });
    
                return columns;
            }
    
            function renderTableHeaders(columns) {
                const theadHtml = columns.map(column => {
                    const label = column.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
                    return `<th>${label}</th>`;
                }).join('');
    
                const fullThead = `${theadHtml}<th>Actions</th>`;
                $('#' + table + 'Table thead tr').html(fullThead);
            }
    
            $.ajax({
                url: "/" + table.replace(/_/g, '-') + "/create",
                type: "POST",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    pencarian: pencarian,
                    columns: 'columns'
                },
                success: function(json) {
                    renderTableHeaders(json.columns);
                    $('#' + table + 'Table').DataTable({
                        processing: true,
                        serverSide: true,
                        destroy: true,
                        initComplete: function() {
                            $('.dt-search').hide();
                        },
                        ajax: {
                            url: "/" + table.replace(/_/g, '-') + "/create",
                            type: "POST",
                            data: function(d) {
                                d._token = '<?php echo e(csrf_token()); ?>';
                                d.pencarian = pencarian;
                                d.start = d.start || 0;
                                d.length = d.length || 10;
                            },
                            dataSrc: function(json) {
                                return json.data;
                            }
                        },
                        columns: buatColumns(json.columns),
                        pageLength: 10
                    });
                }
            });
        }
    
        myFunc2();
    
        let typingTimer;
        let doneTypingInterval = 500;
    
        $('#pencarian').keyup(function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(function() {
                myFunc2($('#pencarian').val());
            }, doneTypingInterval);
        });
    </script>
    
    
    <script>
        $(document).ready(function() {
            let table = '';
            <?php if(isset($table)): ?>
                table = <?php echo json_encode($table, 15, 512) ?>
            <?php endif; ?>

            $(document).on('click', '.edit-btn-' + table, function() {
                var id = $(this).data('id');

                $.ajax({
                    url: '/' + table.replace(/_/g, '-') + '/edit/' + id,
                    type: 'GET',
                    success: function(response) {

                        response.columns.forEach(column => {
                            $('#' + table + 'EditModal' + ' #' + column).val(response
                                .data[
                                    column]);
                        });
                        var formAction = '/' + table.replace(/_/g, '-') + '/update/' +
                            id;

                        $('#' + table + 'EditForm').attr('action', formAction);

                        $('#' + table + 'EditModal').modal('show');

                    },
                    error: function() {
                        alert('Terjadi kesalahan saat mengambil data ibu.');
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            let table = '';
            <?php if(isset($table)): ?>
                table = <?php echo json_encode($table, 15, 512) ?>
            <?php endif; ?>

            $(document).on('click', '.delete-btn-' + table, function() {
                var userId = $(this).data('id');
                if (confirm('Apakah Anda yakin ingin menghapus user ini?')) {
                    $.ajax({
                        url: '/' + table.replace(/_/g, '-') + '/delete/' + userId,
                        type: 'DELETE',
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
                        },
                        success: function(response) {
                            alert(response.success);
                            $('#' + table + 'Table').DataTable().row($(this).parents('tr'))
                                .remove().draw();
                        },
                        error: function(error) {
                            alert('Terjadi kesalahan saat menghapus ibu.');
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
<?php /**PATH /app/resources/views/admin/layouts/layout.blade.php ENDPATH**/ ?>