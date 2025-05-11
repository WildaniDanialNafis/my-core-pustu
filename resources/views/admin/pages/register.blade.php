@extends('admin.layouts.sign-layout')
@section('title', 'SB Admin 2 - Register')
@section('content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                        </div>
                        <form class="user" action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="first_name"
                                        placeholder="Nama Depan">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="last_name"
                                        placeholder="Nama Akhir">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="email"
                                    placeholder="Alamat Email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" name="password"
                                        placeholder="Kata Sandi">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        name="password_confirmation" placeholder="Ulang Kata Sandi">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar Akun
                            </button>
                        </form>

                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Lupa Kata Sandi?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{ route('login.create') }}">Sudah memiliki akun? Masuk!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
