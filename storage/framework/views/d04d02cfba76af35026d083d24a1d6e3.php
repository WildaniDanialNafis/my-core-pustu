<aside class="sidebar">
    
<div class="px-3 py-2">
    <div class="input-group w-100">
        <span class="input-group-text bg-light-purple text-purple border-0 rounded-start-pill px-3">
            <i class="fas fa-search"></i>
        </span>
        <input
            type="text"
            class="form-control bg-light-purple text-dark border-0 rounded-end-pill px-3 py-2"
            id="sidebarSearch"
            placeholder="Cari menu...">
    </div>
</div>

<style>
    .text-purple {
        color: #6366f1 !important;
    }

    .bg-light-purple {
        background-color: rgba(99, 102, 241, 0.08) !important;
    }

    .input-group-text {
        transition: all 0.3s ease;
    }

    .input-group:focus-within .input-group-text {
        color: white !important;
        background-color: #6366f1 !important;
    }

    #sidebarSearch:focus {
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        background-color: white !important;
    }

    #sidebarSearch::placeholder {
        color: #94a3b8;
        opacity: 1;
    }
</style>

    <ul class="sidebar-menu">
        <li class="menu-title" style="--delay: 1">Main</li>

        <li class="menu-item" style="--delay: 2">
            <a href="/dashboard" class="active">
                <span class="menu-icon"><i class="fas fa-home"></i></span>
                <span class="menu-text">Dashboard</span>
                <span class="menu-badge">New</span>
            </a>
        </li>

        <li class="menu-title" style="--delay: 3">Ibu</li>
        <li class="menu-item has-submenu" style="--delay: 4">
            <a class="mb-2">
                <span class="menu-icon"><i class="fas fa-user-nurse"></i></span>
                <span class="menu-text">Ibu</span>
                <span class="menu-arrow"><i class="fas fa-chevron-right"></i></span>
            </a>
            <ul class="submenu list-unstyled" id="submenu-list1"></ul>
        </li>

        <li class="menu-title" style="--delay: 5">Anak</li>
        <li class="menu-item has-submenu" style="--delay: 6">
            <a class="mb-2">
                <span class="menu-icon"><i class="fas fa-baby"></i></span>
                <span class="menu-text">Anak</span>
                <span class="menu-arrow"><i class="fas fa-chevron-right"></i></span>
            </a>
            <ul class="submenu list-unstyled" id="submenu-list2"></ul>
        </li>

        <li class="menu-title" style="--delay: 7">Grafik</li>
        <li class="menu-item has-submenu" style="--delay: 8">
            <a class="mb-2">
                <span class="menu-icon"><i class="fas fa-chart-line"></i></span>
                <span class="menu-text">Grafik</span>
                <span class="menu-arrow"><i class="fas fa-chevron-right"></i></span>
            </a>
            <ul class="submenu list-unstyled" id="submenu-list3"></ul>
        </li>
    </ul>

    <div class="sidebar-footer">
        <div class="user-profile">
            <img src="<?php echo e(Auth::user()->profile_photo_url ?? 'https://randomuser.me/api/portraits/women/44.jpg'); ?>" alt="<?php echo e(Auth::user()->name); ?>">
            <div class="user-info">
                <h5><?php echo e(Auth::user()->name); ?></h5>
                <small>Admin</small>
            </div>
        </div>
    </div>
</aside>
<?php /**PATH /var/www/my-core-pustu/resources/views/admin/layouts2/sidebar.blade.php ENDPATH**/ ?>