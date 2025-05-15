
<aside class="sidebar">
    <ul class="sidebar-menu">
        <li class="menu-title" style="--delay: 1">Main</li>

        <li class="menu-item" style="--delay: 2">
            <a href="/dashboard" class="active">
                <span class="menu-icon"><i class="fas fa-home"></i></span>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>

        <li class="menu-item" style="--delay: 3">
            <a href="/analytics">
                <span class="menu-icon"><i class="fas fa-chart-line"></i></span>
                <span class="menu-text">Analytics</span>
            </a>
        </li>

        <li class="menu-item" style="--delay: 4">
            <a href="/ecommerce">
                <span class="menu-icon"><i class="fas fa-shopping-cart"></i></span>
                <span class="menu-text">E-commerce</span>
                <span class="menu-badge">New</span>
            </a>
        </li>

        <li class="menu-title" style="--delay: 5">Ibu</li>

        <li class="menu-item has-submenu" style="--delay: 6">
            <a class="mb-2">
                <span class="menu-icon"><i class="fas fa-user-nurse"></i></span>
                <span class="menu-text">Ibu</span>
                <span class="menu-arrow"><i class="fas fa-chevron-right"></i></span>
            </a>

            <ul class="submenu list-unstyled" id="submenu-list1">
            </ul>

        </li>

        <li class="menu-title" style="--delay: 7">Anak</li>

        <li class="menu-item has-submenu" style="--delay: 8">
            <a class="mb-2">
                <span class="menu-icon"><i class="fas fa-baby"></i></span>
                <span class="menu-text">Anak</span>
                <span class="menu-arrow"><i class="fas fa-chevron-right"></i></span>
            </a>

            <ul class="submenu list-unstyled" id="submenu-list2">
            </ul>

        </li>

        <!-- Other menu items with similar onclick handlers -->
    </ul>

    <div class="sidebar-footer">
        <div class="user-profile">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User">
            <div class="user-info">
                <h5>Sarah Johnson</h5>
                <small>Admin</small>
            </div>
        </div>
    </div>
</aside>
<?php /**PATH /var/www/my-core-pustu/resources/views/admin/layouts2/sidebar.blade.php ENDPATH**/ ?>