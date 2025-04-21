<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

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

        @include('admin.layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('admin.layouts.header')
                @yield('content')

            </div>
            <!-- End of Main Content -->

            @include('admin.layouts.footer')

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
                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                    </form>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript -->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages -->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-bar-demo.js') }}"></script>

    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Load DataTables -->
    <script src="https://cdn.datatables.net/v/bs5/dt-2.2.2/datatables.min.js"
        integrity="sha384-k90VzuFAoyBG5No1d5yn30abqlaxr9+LfAPp6pjrd7U3T77blpvmsS8GqS70xcnH" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            console.log("jQuery Loaded:", typeof jQuery);

            // Inisialisasi DataTables
            $('#usersTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('users.data') }}",
                    type: "GET",
                    dataSrc: function(json) {
                        console.log("DataTables Response:", json); // Debugging
                        return json.data; // Pastikan 'data' sesuai dengan response dari server
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'email_verified_at',
                        name: 'email_verified_at'
                    },
                    {
                        data: 'id_role',
                        name: 'id_role'
                    },
                    {
                        data: null,
                        name: 'actions',
                        render: function(data, type, row) {
                            return '<button class="btn btn-warning btn-sm edit-btn" data-id="' + row
                                .id + '">Edit</button>' +
                                '<button class="ms-1 btn btn-danger btn-sm delete-btn" data-id="' +
                                row.id + '">Delete</button>';
                        }
                    }
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Event listener untuk tombol Edit
            $(document).on('click', '.edit-btn', function() {
                var userId = $(this).data('id'); // Ambil ID dari atribut data-id

                // Kirim AJAX request untuk mendapatkan data user
                $.ajax({
                    url: '/coba-tables/edit/' + userId, // Route yang akan mengembalikan data user
                    type: 'GET',
                    success: function(response) {
                        // Isi modal dengan data user yang ditemukan
                        $('#editUserModal #editUserName').val(response.user.name);
                        $('#editUserModal #editUserEmail').val(response.user.email);
                        $('#editUserModal #editUserRole').val(response.user.id_role);

                        // Update action URL form
                        var formAction = '{{ route('tables.update', ':id') }}';
                        formAction = formAction.replace(':id', userId);
                        $('#editUserForm').attr('action', formAction);

                        // Tampilkan modal
                        $('#editUserModal').modal('show');
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat mengambil data user.');
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete-btn', function() {
                var userId = $(this).data('id');
                if (confirm('Apakah Anda yakin ingin menghapus user ini?')) {
                    $.ajax({
                        url: '/coba-tables/delete/' + userId,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            alert(response.success);
                            $('#datatablesSimple').DataTable().row($(this).parents('tr'))
                                .remove().draw();
                        },
                        error: function(error) {
                            alert('Terjadi kesalahan saat menghapus user.');
                        }
                    });
                }
            });
        });
    </script>
    {{-- <script>
        $(document).ready(function() {
            // Fungsi untuk membuat kolom berdasarkan serverColumns
            function buatColumns(serverColumns) {
                var columns = serverColumns.map(function(column) {
                    return {
                        data: column,
                        name: column
                    };
                });

                // Menambahkan kolom aksi untuk Edit dan Delete
                columns.push(createActionColumn());

                return columns;
            }

            // Fungsi untuk membuat kolom aksi
            function createActionColumn() {
                return {
                    data: null,
                    name: 'actions',
                    render: function(data, type, row) {
                        return '<button class="btn btn-warning btn-sm edit-btn-ibu" data-id="' + row.id_ibu +
                            '">Edit</button>' +
                            '<button class="ms-1 btn btn-danger btn-sm delete-btn-ibu" data-id="' + row.id_ibu +
                            '">Delete</button>';
                    }
                };
            }

            // Inisialisasi DataTables
            $('#ibuTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('ibu.create') }}",
                    type: "GET",
                    dataSrc: function(json) {
                        // Debugging response untuk memastikan data yang diterima
                        console.log(json);
                        return json.data.data;
                    }
                },
                columns: @if (isset($columns))
                    buatColumns(
                            @json($columns)
                        ),
                @else
                    buatColumns([]),
                @endif
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            $(document).on('click', '.edit-btn-ibu', function() {
                var ibuId = $(this).data('id');

                $.ajax({
                    url: '/ibu/edit/' + ibuId,
                    type: 'GET',
                    success: function(response) {

                        response.columns.forEach(column => {
                            $('#editIbuModal' + ' #' + column).val(response.data[
                                column]);
                        });

                        var formAction = '{{ route('ibu.update', ':id') }}';
                        formAction = formAction.replace(':id', ibuId);
                        $('#editIbuForm').attr('action', formAction);

                        $('#editIbuModal').modal('show');
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
            $(document).on('click', '.delete-btn-ibu', function() {
                var userId = $(this).data('id');
                if (confirm('Apakah Anda yakin ingin menghapus user ini?')) {
                    $.ajax({
                        url: '/ibu/delete/' + userId,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            alert(response.success);
                            $('#ibuTable').DataTable().row($(this).parents('tr'))
                                .remove().draw();
                        },
                        error: function(error) {
                            alert('Terjadi kesalahan saat menghapus ibu.');
                        }
                    });
                }
            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            let table = '';
            @if (isset($table))
                table = @json($table)
            @endif
            // Fungsi untuk membuat kolom berdasarkan serverColumns
            function buatColumns(serverColumns) {
                var columns = serverColumns.map(function(column) {
                    return {
                        data: column,
                        name: column
                    };
                });

                // Menambahkan kolom aksi untuk Edit dan Delete
                columns.push(createActionColumn());

                return columns;
            }

            // Fungsi untuk membuat kolom aksi
            function createActionColumn() {
                return {
                    data: null,
                    name: 'actions',
                    render: function(data, type, row) {
                        return '<button class="btn btn-warning btn-sm edit-btn-' + table + '" data-id="' + row[
                                'id_' + table] +
                            '">Edit</button>' +
                            '<button class="ms-1 btn btn-danger btn-sm delete-btn-' + table + '" data-id="' +
                            row['id_' + table] +
                            '">Delete</button>';
                    }
                };
            }

            // Inisialisasi DataTables
            $('#' + table + 'Table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "/" + table.replace(/_/g, '-') + "/create",
                    type: "GET",
                    dataSrc: function(json) {
                        // Debugging response untuk memastikan data yang diterima
                        console.log(json.data);
                        return json.data.data;
                    }
                },
                columns: @if (isset($columns))
                    buatColumns(
                            @json($columns)
                        ),
                @else
                    buatColumns([]),
                @endif
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            let table = '';
            @if (isset($table))
                table = @json($table)
            @endif

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
            @if (isset($table))
                table = @json($table)
            @endif

            $(document).on('click', '.delete-btn-' + table, function() {
                var userId = $(this).data('id');
                if (confirm('Apakah Anda yakin ingin menghapus user ini?')) {
                    $.ajax({
                        url: '/' + table.replace(/_/g, '-') + '/delete/' + userId,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}',
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
