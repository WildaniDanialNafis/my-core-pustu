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

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Custom Styles -->
    <style>
        .input-group-password {
            position: relative;
        }

        .input-group-password .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            color: #6c757d;
            cursor: pointer;
            opacity: 0.6;
            font-size: 1rem;
        }

        .input-group-password .password-toggle:hover {
            opacity: 0.9;
            color: var(--primary-color);
        }

        :root {
            --primary-color: #4b7bec;
            /* Soft blue */
            --primary-dark: #3867d6;
            --secondary-color: #a55eea;
            /* Soft purple */
            --secondary-dark: #8c4ad1;
            --accent-color: #fd9644;
            /* Warm orange */
            --accent-dark: #e67e36;
            --light-color: #f8f9fc;
            --dark-color: #34495e;
            --success-color: #20bf6b;
            --error-color: #eb3b5a;
        }

        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            background: linear-gradient(-45deg, #a1c4fd, #c2e9fb, #fbc2eb, #ff9a9e);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            color: #333;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .login-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 100vh;
            padding: 2rem 0;
        }

        .login-container {
            max-width: 450px;
            width: 100%;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .login-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            backdrop-filter: blur(12px);
            background-color: rgba(255, 255, 255, 0.92);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255, 255, 255, 0.4);
            animation: fadeInUp 0.8s ease-out;
        }

        .login-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1.5rem;
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
            background: linear-gradient(to bottom right,
                    rgba(255, 255, 255, 0.4) 0%,
                    rgba(255, 255, 255, 0) 60%);
            transform: rotate(30deg);
            animation: shine 6s infinite;
        }

        @keyframes shine {
            0% {
                transform: rotate(30deg) translate(-30%, -30%);
            }

            100% {
                transform: rotate(30deg) translate(30%, 30%);
            }
        }

        .card-body {
            padding: 2rem;
        }

        .form-control {
            padding: 0.75rem 1rem;
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            background-color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
            height: calc(2.5rem + 2px);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(75, 123, 236, 0.3);
            background-color: white;
        }

        .input-group-text {
            background-color: transparent;
            border: none;
            padding: 0 0.75rem;
        }

        .btn-login {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.4s;
            border-radius: 10px;
            color: white;
            font-size: 1rem;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .btn-login::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 200%;
            height: 200%;
            background: linear-gradient(to right,
                    rgba(255, 255, 255, 0.13) 0%,
                    rgba(255, 255, 255, 0.13) 77%,
                    rgba(255, 255, 255, 0.5) 92%,
                    rgba(255, 255, 255, 0.0) 100%);
            transform: rotate(30deg);
            transition: all 0.7s;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, var(--primary-dark), var(--secondary-dark));
        }

        .btn-login:hover::after {
            left: 130%;
        }

        /* Health-themed floating elements */
        .health-shapes {
            position: fixed;
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
            opacity: 0.2;
            animation: float 25s infinite linear;
            filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.1));
            z-index: 1;
        }

        .shape-1 {
            font-size: 100px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
            animation-duration: 20s;
            color: var(--primary-color);
        }

        .shape-2 {
            font-size: 150px;
            top: 60%;
            left: 70%;
            animation-delay: 3s;
            animation-duration: 25s;
            color: var(--secondary-color);
        }

        .shape-3 {
            font-size: 80px;
            top: 30%;
            left: 80%;
            animation-delay: 5s;
            animation-duration: 18s;
            color: var(--accent-color);
        }

        .shape-4 {
            font-size: 120px;
            top: 75%;
            left: 10%;
            animation-delay: 7s;
            animation-duration: 22s;
            color: var(--primary-color);
        }

        .shape-5 {
            font-size: 90px;
            top: 20%;
            left: 60%;
            animation-delay: 2s;
            animation-duration: 30s;
            color: var(--secondary-color);
        }

        .shape-6 {
            font-size: 70px;
            top: 65%;
            left: 30%;
            animation-delay: 4s;
            animation-duration: 17s;
            color: var(--accent-color);
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg) scale(1);
            }

            25% {
                transform: translateY(-50px) rotate(90deg) scale(1.1);
            }

            50% {
                transform: translateY(-100px) rotate(180deg) scale(1);
            }

            75% {
                transform: translateY(-50px) rotate(270deg) scale(0.9);
            }

            100% {
                transform: translateY(0) rotate(360deg) scale(1);
            }
        }

        .footer {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            color: var(--dark-color);
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            font-size: 0.85rem;
            margin-top: auto;
        }

        .logo-container {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto 1.5rem;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s;
            border: 5px solid rgba(255, 255, 255, 0.8);
            animation: pulse 2s infinite;
            overflow: hidden;
        }

        .logo-container::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.7), transparent);
            transform: translateX(-100%);
            animation: shine-logo 3s infinite;
        }

        @keyframes shine-logo {
            100% {
                transform: translateX(100%);
            }
        }

        .logo-container img {
            width: 70%;
            height: auto;
            z-index: 2;
            transition: transform 0.3s;
        }

        .logo-container:hover {
            transform: rotate(5deg) scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .logo-container:hover img {
            transform: scale(1.1);
        }

        .app-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.75rem;
            letter-spacing: -0.5px;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            animation: fadeIn 1s ease-out;
        }

        .app-subtitle {
            font-weight: 400;
            font-size: 0.95rem;
            opacity: 0.9;
            animation: fadeIn 1s ease-out 0.2s both;
            margin-bottom: 1.5rem;
        }

        /* Form styling */
        .form-floating {
            margin-bottom: 1.25rem;
        }

        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-select~label {
            transform: scale(0.85) translateY(-0.8rem) translateX(0.15rem);
            color: var(--primary-color);
            font-weight: 500;
        }

        .form-floating>label {
            padding-left: 2.5rem;
            color: #6c757d;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--dark-color);
            opacity: 0.5;
            transition: all 0.3s;
            z-index: 5;
        }

        .password-toggle:hover {
            opacity: 0.8;
            color: var(--primary-color);
        }

        /* Error message */
        .error-message {
            color: var(--error-color);
            font-size: 0.85rem;
            margin-top: 0.25rem;
            animation: fadeIn 0.3s ease-out;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .login-container {
                padding: 0 1rem;
            }

            .card-header {
                padding: 1.25rem;
            }

            .card-body {
                padding: 1.5rem;
            }

            .app-title {
                font-size: 1.5rem;
            }

            .logo-container {
                width: 100px;
                height: 100px;
            }
        }
    </style>
</head>

<body>
    <!-- Health-themed Floating Shapes -->
    <div class="health-shapes">
        <i class="fas fa-baby-carriage shape shape-1"></i>
        <i class="fas fa-heartbeat shape shape-2"></i>
        <i class="fas fa-user-md shape shape-3"></i>
        <i class="fas fa-hospital shape shape-4"></i>
        <i class="fas fa-stethoscope shape shape-5"></i>
        <i class="fas fa-pills shape shape-6"></i>
    </div>

    <div class="login-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="login-container">
                        <div class="text-center mb-4">
                            <div class="logo-container">
                                <img src="<?php echo e(asset('assets/img/logo.jpeg')); ?>" alt="SI-KIA Logo" class="img-fluid">
                            </div>
                            <h1 class="app-title">Sistem Informasi KIA</h1>
                            <p class="app-subtitle text-muted">Pelayanan Kesehatan Ibu dan Anak Terpadu</p>
                        </div>

                        <div class="login-card card">
                            <div class="card-header">
                                <h3 class="mb-0"><i class="fas fa-lock me-2"></i> Masuk ke Sistem</h3>
                            </div>
                            <div class="card-body">
                                <form id="loginForm" class="user" action="<?php echo e(route('login')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>

                                    <?php if($errors->any()): ?>
                                        <div class="alert alert-danger animate__animated animate__shakeX mb-4">
                                            <ul class="mb-0">
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($error); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Alamat Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i
                                                    class="fas fa-envelope text-primary"></i></span>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Email" required value="<?php echo e(old('email')); ?>">
                                        </div>
                                        <div class="invalid-feedback">Harap masukkan email yang valid</div>
                                    </div>

                                    <div class="mb-3 position-relative">
                                        <label for="password" class="form-label">Kata Sandi</label>
                                        <div class="input-group input-group-password">
                                            <span class="input-group-text"><i
                                                    class="fas fa-key text-primary"></i></span>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Kata Sandi" required>
                                            <span class="password-toggle"><i class="fas fa-eye"
                                                    id="togglePassword"></i></span>
                                        </div>
                                        <div class="invalid-feedback">Harap masukkan kata sandi</div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember"
                                                name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="remember">Ingat saya</label>
                                        </div>
                                        <a href="<?php echo e(route('password.request')); ?>"
                                            class="text-decoration-none small text-primary">Lupa kata sandi?</a>
                                    </div>

                                    <button type="submit" class="btn btn-login mb-3">
                                        <span class="spinner-border spinner-border-sm d-none" role="status"
                                            aria-hidden="true"></span>
                                        <i class="fas fa-sign-in-alt me-2"></i> Masuk
                                    </button>

                                    <?php if(Route::has('register')): ?>
                                        <div class="text-center mt-3">
                                            <p class="mb-0 small">Belum punya akun? <a href="<?php echo e(route('register')); ?>"
                                                    class="text-decoration-none fw-bold text-primary">Daftar
                                                    sekarang</a></p>
                                        </div>
                                    <?php endif; ?>
                                </form>
                            </div>

                        </div>

                        <div class="text-center mt-3">
                            <p class="small text-white">© <?php echo e(date('Y')); ?> Dinas Kesehatan. Sistem Informasi
                                Kesehatan Ibu dan Anak</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <span class="small">Versi 2.1.0 | Terakhir diperbarui: <?php echo e(date('F Y')); ?></span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#"
                                class="text-decoration-none small text-muted">Bantuan</a></li>
                        <li class="list-inline-item"><a href="#"
                                class="text-decoration-none small text-muted">Kebijakan Privasi</a></li>
                        <li class="list-inline-item"><a href="#"
                                class="text-decoration-none small text-muted">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password toggle functionality
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.classList.toggle('fa-eye-slash');
                this.classList.toggle('fa-eye');
            });

            // Form validation
            const form = document.getElementById('loginForm');
            const email = document.getElementById('email');
            const passwordInput = document.getElementById('password');

            form.addEventListener('submit', function(e) {
                let isValid = true;

                // Validate email
                if (!email.value || !/^\S+@\S+\.\S+$/.test(email.value)) {
                    email.classList.add('is-invalid');
                    isValid = false;
                } else {
                    email.classList.remove('is-invalid');
                }

                // Validate password
                if (!passwordInput.value || passwordInput.value.length < 6) {
                    passwordInput.classList.add('is-invalid');
                    isValid = false;
                } else {
                    passwordInput.classList.remove('is-invalid');
                }

                if (!isValid) {
                    e.preventDefault();
                } else {
                    // Show loading spinner
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const spinner = submitBtn.querySelector('.spinner-border');
                    const icon = submitBtn.querySelector('.fa-sign-in-alt');

                    submitBtn.disabled = true;
                    icon.classList.add('d-none');
                    spinner.classList.remove('d-none');
                }
            });

            // Theme switcher (optional)
            const themeSwitcher = document.createElement('button');
            themeSwitcher.innerHTML = '<i class="fas fa-moon"></i>';
            themeSwitcher.className =
                'btn btn-sm btn-outline-secondary position-fixed bottom-0 end-0 m-3 rounded-circle';
            themeSwitcher.style.zIndex = '1000';
            themeSwitcher.style.width = '40px';
            themeSwitcher.style.height = '40px';
            document.body.appendChild(themeSwitcher);

            themeSwitcher.addEventListener('click', function() {
                const html = document.documentElement;
                const currentTheme = html.getAttribute('data-bs-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

                html.setAttribute('data-bs-theme', newTheme);
                this.innerHTML = newTheme === 'dark' ? '<i class="fas fa-sun"></i>' :
                    '<i class="fas fa-moon"></i>';

                // Save preference to localStorage
                localStorage.setItem('theme', newTheme);
            });

            // Check for saved theme preference
            if (localStorage.getItem('theme') === 'dark') {
                document.documentElement.setAttribute('data-bs-theme', 'dark');
                themeSwitcher.innerHTML = '<i class="fas fa-sun"></i>';
            }

            // Animate elements on scroll
            const animateOnScroll = function() {
                const elements = document.querySelectorAll(
                    '.login-card, .logo-container, .app-title, .app-subtitle');

                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;

                    if (elementPosition < screenPosition) {
                        element.style.opacity = '1';
                    }
                });
            };

            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll(); // Initialize
        });
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });
    </script>
</body>

</html>
<?php /**PATH /var/www/my-core-pustu/resources/views/admin/pages/login.blade.php ENDPATH**/ ?>