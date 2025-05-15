<header class="header">
    <a href="#" class="logo">
        <i class="fas fa-bolt"></i>
        <span>NeonDash</span>
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
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="user-avatar">

            <!-- Dropdown yang ditambahkan -->
            <div class="profile-dropdown">
                <div class="profile-preview">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="dropdown-avatar">
                    <div class="profile-details">
                        <span class="profile-name">Jessica Parker</span>
                        <span class="profile-email">admin@neondash.com</span>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <button class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </button>
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
        animation: neonGlow 1.5s infinite alternate;
    }

    .user-btn:hover .profile-dropdown,
    .profile-dropdown:hover {
        display: block;
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

    /* Animasi neon yang sudah ada */
    @keyframes neonGlow {
        from {
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
        }

        to {
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.7), 0 0 30px rgba(0, 255, 255, 0.4);
        }
    }
</style>
