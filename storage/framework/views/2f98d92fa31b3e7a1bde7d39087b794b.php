<header class="header">
    <a href="/dashboard" class="logo">
        <i><img src="<?php echo e(asset('logo-pustu.png')); ?>" alt="logo-pustu" style="width: 32px; height: 32px;">
        </i>
        <span>Pustu Lada Pamekasan</span>
    </a>

    <div class="search-bar">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search dashboard..." id="searchInput">
    </div>

    <div class="header-actions">
        <div class="notification-btn" id="notificationBtn">
            <i class="fas fa-bell"></i>
            <span class="notification-badge">3</span>
        </div>

        <div class="user-btn" id="userBtn">
            <img src="<?php echo e(Auth::user()->profile_photo_url ?? 'https://randomuser.me/api/portraits/women/44.jpg'); ?>" alt="User" class="user-avatar">

            <!-- Dropdown yang ditambahkan -->
            <div class="profile-dropdown" id="profileDropdown">
                <div class="profile-preview">
                    <img src="<?php echo e(Auth::user()->profile_photo_url ?? 'https://randomuser.me/api/portraits/women/44.jpg'); ?>" alt="User" class="dropdown-avatar">
                    <div class="profile-details">
                        <span class="profile-name"><?php echo e(Auth::user()->name); ?></span>
                        <span class="profile-email"><?php echo e(Auth::user()->email); ?></span>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<style>
    /* Dropdown Styles */
    .profile-dropdown {
        position: absolute;
        top: 50px;
        right: 0;
        width: 250px;
        background: #1e1e2e;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        border: 1px solid #00ffff33;
        padding: 15px;
        z-index: 100;
        display: none;
        opacity: 0;
        transform: translateY(-10px);
        transition: opacity 0.2s ease, transform 0.2s ease;
    }

    .profile-dropdown.active {
        display: block;
        opacity: 1;
        transform: translateY(0);
        animation: neonGlow 1.5s infinite alternate;
    }

    .profile-preview {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .dropdown-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 2px solid #00ffff;
        margin-right: 12px;
    }

    .profile-details {
        display: flex;
        flex-direction: column;
    }

    .profile-name {
        color: #00ffff;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-email {
        color: #7fdbff;
        font-size: 12px;
        margin-top: 2px;
    }

    .dropdown-divider {
        height: 1px;
        background: #00ffff22;
        margin: 10px 0;
    }

    .logout-btn {
        display: flex;
        align-items: center;
        width: 100%;
        background: transparent;
        border: none;
        color: #ff5555;
        padding: 8px 0;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .logout-btn i {
        margin-right: 10px;
        font-size: 14px;
    }

    .logout-btn span {
        font-size: 14px;
    }

    .logout-btn:hover {
        color: #ff3333;
        text-shadow: 0 0 5px #ff555555;
    }

    /* Animasi neon */
    @keyframes neonGlow {
        from {
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
        }
        to {
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.7), 0 0 30px rgba(0, 255, 255, 0.4);
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const userBtn = document.getElementById('userBtn');
    const profileDropdown = document.getElementById('profileDropdown');
    let dropdownTimeout;
    
    // Toggle dropdown saat tombol user diklik
    userBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        profileDropdown.classList.toggle('active');
    });
    
    // Buka dropdown saat hover (opsional)
    userBtn.addEventListener('mouseenter', function() {
        clearTimeout(dropdownTimeout);
        profileDropdown.classList.add('active');
    });
    
    // Delay untuk menutup dropdown saat mouse keluar
    userBtn.addEventListener('mouseleave', function() {
        dropdownTimeout = setTimeout(() => {
            if (!profileDropdown.matches(':hover')) {
                profileDropdown.classList.remove('active');
            }
        }, 300);
    });
    
    profileDropdown.addEventListener('mouseleave', function() {
        dropdownTimeout = setTimeout(() => {
            profileDropdown.classList.remove('active');
        }, 300);
    });
    
    // Batal timeout jika mouse kembali
    profileDropdown.addEventListener('mouseenter', function() {
        clearTimeout(dropdownTimeout);
    });
    
    // Tutup dropdown saat klik di luar
    document.addEventListener('click', function(e) {
        if (!userBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
            profileDropdown.classList.remove('active');
        }
    });
    
    // Logout confirmation
    const logoutForm = profileDropdown.querySelector('form');
    if (logoutForm) {
        logoutForm.addEventListener('submit', function(e) {
            if (!confirm('Apakah Anda yakin ingin logout?')) {
                e.preventDefault();
            }
        });
    }
});
</script><?php /**PATH /var/www/my-core-pustu/resources/views/admin/layouts2/header.blade.php ENDPATH**/ ?>