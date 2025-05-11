{{-- <aside class="sidebar">
    <ul class="sidebar-menu">
        <li class="menu-title" style="--delay: 1">Main</li>

        <li class="menu-item" style="--delay: 2">
            <a href="/dashboard2" class="active">
                <span class="menu-icon"><i class="fas fa-home"></i></span>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>

        <li class="menu-item" style="--delay: 3">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-chart-line"></i></span>
                <span class="menu-text">Analytics</span>
            </a>
        </li>

        <li class="menu-item" style="--delay: 4">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-shopping-cart"></i></span>
                <span class="menu-text">E-commerce</span>
                <span class="menu-badge">New</span>
            </a>
        </li>

        <li class="menu-title" style="--delay: 5">Management</li>

        <li class="menu-item has-submenu" style="--delay: 6">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-users"></i></span>
                <span class="menu-text">Users</span>
                <span class="menu-arrow"><i class="fas fa-chevron-right"></i></span>
            </a>

            <ul class="submenu">
                <li style="--delay: 1"><a href="/ibu">Ibu</a></li>
                <li style="--delay: 2"><a href="/keluarga">Keluarga</a></li>
                <li style="--delay: 3"><a href="#">Roles</a></li>
                <li style="--delay: 4"><a href="#">Permissions</a></li>
            </ul>
        </li>

        <li class="menu-item has-submenu" style="--delay: 7">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-box"></i></span>
                <span class="menu-text">Products</span>
                <span class="menu-arrow"><i class="fas fa-chevron-right"></i></span>
            </a>

            <ul class="submenu">
                <li style="--delay: 1"><a href="#">Inventory</a></li>
                <li style="--delay: 2"><a href="#">Categories</a></li>
                <li style="--delay: 3"><a href="#">Orders</a></li>
                <li style="--delay: 4"><a href="#">Discounts</a></li>
            </ul>
        </li>

        <li class="menu-item" style="--delay: 8">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-file-invoice-dollar"></i></span>
                <span class="menu-text">Invoices</span>
            </a>
        </li>

        <li class="menu-title" style="--delay: 9">Support</li>

        <li class="menu-item" style="--delay: 10">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-ticket-alt"></i></span>
                <span class="menu-text">Tickets</span>
                <span class="menu-badge">5</span>
            </a>
        </li>

        <li class="menu-item" style="--delay: 11">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-question-circle"></i></span>
                <span class="menu-text">Help Center</span>
            </a>
        </li>

        <li class="menu-item" style="--delay: 12">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-cog"></i></span>
                <span class="menu-text">Settings</span>
            </a>
        </li>
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
</aside> --}}
<aside class="sidebar">
    <ul class="sidebar-menu">
        <li class="menu-title" style="--delay: 1">Main</li>

        <li class="menu-item" style="--delay: 2">
            <a href="/dashboard" class="active" onclick="loadContent(event, this)">
                <span class="menu-icon"><i class="fas fa-home"></i></span>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>

        <li class="menu-item" style="--delay: 3">
            <a href="/analytics" onclick="loadContent(event, this)">
                <span class="menu-icon"><i class="fas fa-chart-line"></i></span>
                <span class="menu-text">Analytics</span>
            </a>
        </li>

        <li class="menu-item" style="--delay: 4">
            <a href="/ecommerce" onclick="loadContent(event, this)">
                <span class="menu-icon"><i class="fas fa-shopping-cart"></i></span>
                <span class="menu-text">E-commerce</span>
                <span class="menu-badge">New</span>
            </a>
        </li>

        <li class="menu-title" style="--delay: 5">Management</li>

        <li class="menu-item has-submenu" style="--delay: 6">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-users"></i></span>
                <span class="menu-text">Users</span>
                <span class="menu-arrow"><i class="fas fa-chevron-right"></i></span>
            </a>

            <ul class="submenu list-unstyled">
                <li class="mb-2" style="--delay: 1"><a href="/ibu" onclick="loadContent(event, this)">Ibu</a></li>
                <li class="mb-2" style="--delay: 2"><a href="/keluarga" onclick="loadContent(event, this)">Keluarga</a></li>
                <li class="mb-2" style="--delay: 3"><a href="/roles" onclick="loadContent(event, this)">Roles</a>
                </li>
                <li class="mb-2" style="--delay: 4"><a href="/permissions"
                        onclick="loadContent(event, this)">Permissions</a></li>
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
