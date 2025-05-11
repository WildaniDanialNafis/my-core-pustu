@extends('admin.layouts.layout')
@section('title', 'SB Admin 2 - Tables')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                {{-- <div class="table-responsive"> --}}
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Tambah
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengguna</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form id="formTambahData" method="POST" action="{{ route('tables.store') }}">
                                @csrf
                                <div class="modal-body">
                                    <!-- Form untuk input data -->
                                    <!-- Name Input -->
                                    <div class="mb-3">
                                        <label for="exampleInputName" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputName" name="name"
                                            placeholder="Masukkan nama" required>
                                    </div>
                                    <!-- Email Input -->
                                    <div class="mb-3">
                                        <label for="exampleInputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail" name="email"
                                            placeholder="Masukkan email" required>
                                    </div>
                                    <!-- Password Input -->
                                    <div class="mb-3">
                                        <label for="exampleInputPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword"
                                            name="password" placeholder="Masukkan password" required>
                                    </div>
                                    <!-- ID Role Select -->
                                    <div class="mb-3">
                                        <label for="exampleInputRole" class="form-label">ID Role</label>
                                        <select class="form-select" id="exampleInputRole" name="id_role" required>
                                            <option value="">Pilih Role</option>
                                            <option value="1">Admin</option>
                                            <option value="2">User</option>
                                            <option value="3">Guest</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <!-- Tombol Submit -->
                                    <button type="submit" class="btn btn-primary" id="submitForm">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Edit User -->
                <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="editUserForm" method="POST"
                                    action="{{ route('tables.update', ['id' => ':id']) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="editUserName" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="editUserName" name="name"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editUserEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="editUserEmail" name="email"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editUserRole" class="form-label">Role</label>
                                        <select class="form-select" id="editUserRole" name="id_role" required>
                                            <option value="1">Admin</option>
                                            <option value="2">User</option>
                                            <option value="3">Guest</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <label for="na" class="d-block mt-2">Pencarian</label>
                <input type="text" name="na" id="na" class="form-control mt-2" placeholder="Cari...">
                
                <div class="table table-striped">
                    <table class="table-responsive" id="usersTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Diverifikasi pada</th>
                                <th>ID Role</th>
                                <th>Aksi</th>
                            </tr>
                            <tr>
                                <th><input type="text" class="form-control"></th>
                                <th><input type="text" class="form-control"></th>
                                <th><input type="text" class="form-control"></th>
                                <th><input type="text" class="form-control"></th>
                                <th><input type="text" class="form-control"></th>
                                <th><input type="text" class="form-control"></th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Diverifikasi pada</th>
                                <th>ID Role</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- Paginasi (hapus karena pakai DataTables) -->
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
