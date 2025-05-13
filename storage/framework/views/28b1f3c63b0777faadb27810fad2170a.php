<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Informasi Kesehatan Ibu dan Anak">
    <meta name="author" content="Dinas Kesehatan">
    <title>Login | SI-KIA</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        :root {
            --primary-color: #4b7bec;  /* Soft blue */
            --secondary-color: #a55eea; /* Soft purple */
            --accent-color: #fd9644;   /* Warm orange */
            --light-color: #f8f9fc;
            --dark-color: #34495e;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            background: linear-gradient(-45deg, #a1c4fd, #c2e9fb, #fbc2eb, #ff9a9e);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .login-container {
            max-width: 450px;
            width: 100%;
            margin: auto;
            position: relative;
            z-index: 2;
        }

        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 25px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255, 255, 255, 0.3) 0%,
                rgba(255, 255, 255, 0) 60%
            );
            transform: rotate(30deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: rotate(30deg) translate(-10%, -10%); }
            100% { transform: rotate(30deg) translate(10%, 10%); }
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(75, 123, 236, 0.25);
            background-color: white;
        }

        .btn-login {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            border-radius: 8px;
            color: white;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background: linear-gradient(135deg, #3a6bd9, #8d4ae8);
        }

        .health-icon {
            font-size: 1.2rem;
            margin-right: 8px;
            color: var(--primary-color);
        }

        /* Health-themed floating elements */
        .health-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .shape {
            position: absolute;
            opacity: 0.15;
            animation: float 15s infinite linear;
        }

        .shape-1 {
            font-size: 80px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
            color: var(--primary-color);
        }

        .shape-2 {
            font-size: 120px;
            top: 60%;
            left: 70%;
            animation-delay: 2s;
            color: var(--secondary-color);
        }

        .shape-3 {
            font-size: 60px;
            top: 30%;
            left: 80%;
            animation-delay: 4s;
            color: var(--accent-color);
        }

        .shape-4 {
            font-size: 100px;
            top: 75%;
            left: 10%;
            animation-delay: 6s;
            color: var(--primary-color);
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-100px) rotate(180deg); }
            100% { transform: translateY(0) rotate(360deg); }
        }

        .footer {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(5px);
            color: var(--dark-color);
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .login-container {
                padding: 0 15px;
            }
            .card-header {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Health-themed Floating Shapes -->
    <div class="health-shapes">
        <i class="fas fa-baby shape shape-1"></i>
        <i class="fas fa-heartbeat shape shape-2"></i>
        <i class="fas fa-user-md shape shape-3"></i>
        <i class="fas fa-hospital shape shape-4"></i>
    </div>

    <!-- Main Content -->
    <div class="container py-5">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="login-container">
                    <div class="text-center mb-5">
                        <img src="https://via.placeholder.com/120x120/4b7bec/ffffff?text=KIA" alt="Logo KIA" width="120" class="mb-4">
                        <h2 class="fw-bold text-white">Sistem Informasi KIA</h2>
                        <p class="text-white">Pelayanan Kesehatan Ibu dan Anak Terpadu</p>
                    </div>
                    
                    <div class="login-card card">
                        <div class="card-header">
                            <h3 class="mb-0"><i class="fas fa-lock me-2"></i> Masuk ke Sistem</h3>
                        </div>
                        <div class="card-body p-4 p-md-5">
                            <form id="loginForm" class="user" action="<?php echo e(route('login')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('POST'); ?>
                                <div class="form-floating mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Nama Pengguna" required>
                                    <label for="email"><i class="fas fa-user health-icon"></i> Nama Pengguna</label>
                                    <div class="invalid-feedback">Harap masukkan nama pengguna</div>
                                </div>
                                
                                <div class="form-floating mb-4">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Kata Sandi" required>
                                    <label for="password"><i class="fas fa-key health-icon"></i> Kata Sandi</label>
                                    <div class="invalid-feedback">Harap masukkan kata sandi</div>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember">
                                        <label class="form-check-label" for="remember">Ingat saya</label>
                                    </div>
                                    <a href="lupa-sandi.html" class="text-decoration-none small">Lupa kata sandi?</a>
                                </div>
                                
                                <button type="submit" class="btn btn-login w-100 py-2 mb-3">
                                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                    <i class="fas fa-sign-in-alt me-2"></i> Masuk
                                </button>
                                
                                <div class="text-center mt-3">
                                    <p class="mb-0 small">Belum punya akun? <a href="daftar.html" class="text-decoration-none fw-bold">Daftar sekarang</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <p class="small text-white">© 2023 Dinas Kesehatan. Sistem Informasi Kesehatan Ibu dan Anak</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <span class="small">Versi 2.1.0 | Terakhir diperbarui: Juni 2023</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-decoration-none small">Bantuan</a></li>
                        <li class="list-inline-item"><a href="#" class="text-decoration-none small">Kebijakan Privasi</a></li>
                        <li class="list-inline-item"><a href="#" class="text-decoration-none small">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH /var/www/my-core-pustu/resources/views/admin/pages/login.blade.php ENDPATH**/ ?>