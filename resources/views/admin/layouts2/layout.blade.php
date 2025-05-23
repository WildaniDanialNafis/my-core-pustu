<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Neon Dashboard - Premium Admin Template" />
    <meta name="author" content="" />
    <title>Neon Dashboard - Premium Admin Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttDataTabons.bootstrap5.min.css">

    <style>
        /* Fix pagination style conflict */
        ul.pagination {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding-left: 0;
            margin-top: 1rem;
            justify-content: flex-end;
            /* gap: 0.25rem; */
        }

        .pagination .page-item {
            display: inline-block;
        }

        .pagination .page-link {
            display: inline-block;
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
            color: var(--primary);
            background-color: white;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .pagination .page-link:hover {
            background-color: rgba(99, 102, 241, 0.1);
            border-color: var(--primary-light);
            color: var(--primary-dark);
        }

        .pagination .page-item.active .page-link {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .pagination .page-item.disabled .page-link {
            background-color: #f1f5f9;
            color: #aaa;
            pointer-events: none;
        }

        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --primary-light: #818cf8;
            --secondary: #f43f5e;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #94a3b8;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --info: #0ea5e9;
            --sidebar-width: 280px;
            --header-height: 70px;
            --glass-blur: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f1f5f9;
            color: var(--dark);
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Glassmorphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(var(--glass-blur));
            -webkit-backdrop-filter: blur(var(--glass-blur));
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
        }

        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: var(--header-height);
            background: rgba(255, 255, 255, 0.98);
            z-index: 1000;
            display: flex;
            align-items: center;
            padding: 0 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .header.scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(8px);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .logo i {
            margin-right: 10px;
            color: var(--secondary);
            transition: transform 0.5s ease;
        }

        .logo:hover i {
            transform: rotate(360deg);
        }

        .search-bar {
            position: relative;
            margin-left: 2rem;
            flex: 1;
            max-width: 500px;
        }

        .search-bar input {
            width: 100%;
            padding: 0.7rem 1rem 0.7rem 3rem;
            border-radius: 50px;
            border: none;
            background: #f1f5f9;
            font-size: 0.9rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .search-bar input:focus {
            outline: none;
            background: white;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }

        .search-bar i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            transition: color 0.3s ease;
        }

        .search-bar input:focus+i {
            color: var(--primary);
        }

        .header-actions {
            display: flex;
            align-items: center;
            margin-left: auto;
            gap: 1rem;
        }

        .notification-btn,
        .user-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f1f5f9;
            cursor: pointer;
            position: relative;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .notification-btn:hover,
        .user-btn:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            width: 20px;
            height: 20px;
            background: var(--secondary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: 600;
            animation: pulse 2s infinite;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .user-btn:hover .user-avatar {
            transform: scale(1.1);
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.5);
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: var(--header-height);
            left: 0;
            width: var(--sidebar-width);
            height: calc(100vh - var(--header-height));
            background: white;
            padding: 1.5rem 0;
            overflow-y: auto;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 999;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
        }

        .sidebar-menu {
            list-style: none;
            padding: 0 1rem;
        }

        .menu-title {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            color: var(--gray);
            margin: 1.5rem 0 0.5rem 1rem;
            letter-spacing: 0.5px;
            opacity: 0;
            animation: fadeIn 0.5s ease forwards;
            animation-delay: calc(var(--delay) * 0.1s);
        }

        .menu-item {
            margin-bottom: 0.25rem;
            position: relative;
            opacity: 0;
            transform: translateX(-20px);
            animation: slideInLeft 0.5s ease forwards;
            animation-delay: calc(var(--delay) * 0.1s);
        }

        .menu-item a {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: var(--dark);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .menu-item a:hover {
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
            transform: translateX(5px);
        }

        .menu-item a.active {
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
            font-weight: 500;
        }

        .menu-item a.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--primary);
            border-radius: 0 4px 4px 0;
        }

        .menu-icon {
            margin-right: 0.75rem;
            font-size: 1.1rem;
            width: 24px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .menu-item:hover .menu-icon {
            transform: scale(1.2);
        }

        .menu-text {
            flex: 1;
        }

        .menu-badge {
            background: var(--secondary);
            color: white;
            font-size: 0.7rem;
            padding: 0.2rem 0.5rem;
            border-radius: 50px;
            margin-left: 0.5rem;
            animation: pulse 2s infinite;
        }

        .menu-arrow {
            transition: transform 0.3s ease;
        }

        .menu-item.has-submenu>a .menu-arrow {
            transform: rotate(90deg);
        }

        .submenu {
            list-style: none;
            padding-left: 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .menu-item.has-submenu.open .submenu {
            max-height: 500px;
        }

        .submenu li {
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }

        .menu-item.has-submenu.open .submenu li {
            opacity: 1;
            transform: translateY(0);
            transition-delay: calc(var(--delay) * 0.1s);
        }

        .sidebar-footer {
            padding: 1.5rem;
            margin-top: 1rem;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            opacity: 0;
            animation: fadeIn 0.5s ease forwards;
            animation-delay: 0.6s;
        }

        .user-profile {
            display: flex;
            align-items: center;
            transition: transform 0.3s ease;
        }

        .user-profile:hover {
            transform: translateX(5px);
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 0.75rem;
            transition: transform 0.3s ease;
        }

        .user-profile:hover img {
            transform: scale(1.1);
        }

        .user-info h5 {
            font-size: 0.9rem;
            margin-bottom: 0.1rem;
        }

        .user-info small {
            color: var(--gray);
            font-size: 0.75rem;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: var(--sidebar-width);
            margin-top: var(--header-height);
            padding: 2rem;
            min-height: calc(100vh - var(--header-height));
            transition: all 0.3s ease;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .page-title h1 {
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0.5rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .breadcrumb {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .breadcrumb-item {
            font-size: 0.85rem;
            color: var(--gray);
        }

        .breadcrumb-item a {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-item a:hover {
            color: var(--primary);
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: '/';
            padding: 0 0.5rem;
            color: var(--gray);
        }

        .page-actions .btn {
            margin-left: 0.75rem;
        }

        /* Card Styles */
        .card {
            background: white;
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .card:hover::before {
            opacity: 1;
        }

        .card-header {
            background: transparent;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 1.25rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* Button Styles */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.6rem 1.25rem;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
            position: relative;
            overflow: hidden;
        }

        .btn::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.5);
            opacity: 0;
            border-radius: 100%;
            transform: scale(1, 1) translate(-50%, -50%);
            transform-origin: 50% 50%;
        }

        .btn:focus:not(:active)::after {
            animation: ripple 1s ease-out;
        }

        .btn i {
            margin-right: 0.5rem;
            transition: transform 0.3s ease;
        }

        .btn:hover i {
            transform: translateX(3px);
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
            transform: translateY(-2px);
        }

        .btn-outline-primary {
            background: transparent;
            color: var(--primary);
            border: 1px solid var(--primary);
        }

        .btn-outline-primary:hover {
            background: rgba(99, 102, 241, 0.1);
            transform: translateY(-2px);
        }

        /* Outline Warning */
        .btn-outline-warning {
            background: transparent;
            color: var(--warning);
            border: 1px solid var(--warning);
        }

        .btn-outline-warning:hover {
            background: rgba(255, 193, 7, 0.1);
            /* kuning muda transparan */
            transform: translateY(-2px);
        }

        /* Outline Danger */
        .btn-outline-danger {
            background: transparent;
            color: var(--danger);
            border: 1px solid var(--danger);
        }

        .btn-outline-danger:hover {
            background: rgba(220, 53, 69, 0.1);
            /* merah muda transparan */
            transform: translateY(-2px);
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            position: relative;
            overflow: hidden;
            padding: 1.5rem;
            border-radius: 12px;
            color: white;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px) scale(1.02);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.5s ease;
        }

        .stat-card:hover::before {
            transform: scale(1.2);
        }

        .stat-card.primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
        }

        .stat-card.success {
            background: linear-gradient(135deg, var(--success), #34d399);
        }

        .stat-card.warning {
            background: linear-gradient(135deg, var(--warning), #fbbf24);
        }

        .stat-card.danger {
            background: linear-gradient(135deg, var(--danger), #f87171);
        }

        .stat-icon {
            font-size: 2.5rem;
            opacity: 0.3;
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            transition: all 0.3s ease;
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.2) rotate(15deg);
            opacity: 0.5;
        }

        .stat-value {
            font-size: 1.75rem;
            font-weight: 600;
            margin: 0.5rem 0;
        }

        .stat-title {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .stat-change {
            display: flex;
            align-items: center;
            font-size: 0.8rem;
            margin-top: 0.5rem;
        }

        .stat-change i {
            margin-right: 0.3rem;
        }

        .stat-change.positive {
            color: rgba(255, 255, 255, 0.9);
        }

        .stat-change.negative {
            color: rgba(255, 255, 255, 0.7);
        }

        /* Badge Styles */
        .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 600;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.375rem;
            transition: transform 0.2s ease;
        }

        .badge:hover {
            transform: translateY(-2px);
        }

        .bg-primary {
            background-color: var(--primary) !important;
        }

        .bg-success {
            background-color: var(--success) !important;
        }

        .bg-warning {
            background-color: var(--warning) !important;
        }

        .bg-danger {
            background-color: var(--danger) !important;
        }

        .bg-info {
            background-color: var(--info) !important;
        }

        /* Table Styles */
        .table-responsive {
            overflow-x: auto;
            ttd -webkit-overflow-scrolling: touch;
        }

        .table {
            width: 100%;
            color: var(--dark);
            border-collapse: collapse;
        }

        .table thead th {
            background-color: #f8fafc;
            color: var(--gray);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            padding: 0.75rem 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .table tbody td {
            padding: 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            vertical-align: middle;
            transition: background-color 0.2s ease;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .table tbody tr:hover td {
            background-color: rgba(99, 102, 241, 0.05);
        }

        .user-avatar-table {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
            transition: transform 0.3s ease;
        }

        .table tbody tr:hover .user-avatar-table {
            transform: scale(1.1);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }

        /* DataTables Custom Styles */
        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_processing,
        .dataTables_wrapper .dataTables_paginate {
            color: var(--dark);
            padding: 1rem;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 0.25rem 0.5rem;
            transition: all 0.3s ease;
        }

        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            /* padding: 0.25rem 0.75rem; */
            border: 1px solid transparent;
            border-radius: 4px;
            /* margin-left: 2px; */
            transition: all 0.3s ease;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background: var(--primary);
            color: white !important;
            border: 1px solid var(--primary);
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.2);
            color: var(--dark) !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {
            color: #666 !important;
            background: transparent;
        }

        /* Chart Container Styles */
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }

        .chart-hover-info {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 14px;
            z-index: 10;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }

        .chart-hover-info.visible {
            opacity: 1;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .menu-toggle {
                display: block;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-20px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(20px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7);
            }

            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 10px rgba(239, 68, 68, 0);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0);
            }
        }

        @keyframes floating {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes ripple {
            0% {
                transform: scale(0, 0);
                opacity: 1;
            }

            20% {
                transform: scale(25, 25);
                opacity: 1;
            }

            100% {
                opacity: 0;
                transform: scale(40, 40);
            }
        }

        @keyframes gradientBG {
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

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
            transition: background 0.3s ease;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }
    </style>
</head>

<body>
    <!-- Header -->
    @include('admin.layouts2.header')

    <!-- Sidebar -->
    @include('admin.layouts2.sidebar')

    <!-- Main Content -->
    @yield('content')

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom Script -->
    {{-- <script>
        @if (isset($table))
            const table = "{{ $table }}";
        @endif
    </script> --}}
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            once: true
        });

        // Sidebar Submenu Toggle
        $(document).ready(function() {
            $('.menu-item.has-submenu > a').click(function(e) {
                e.preventDefault();
                $(this).parent().toggleClass('open');
                $(this).find('.menu-arrow').toggleClass('rotate-180');
            });

            // function buatColumns(serverColumns) {
            //     const columns = serverColumns.map(function(column) {
            //         return {
            //             data: column,
            //             name: column
            //         };
            //     });

            //     columns.unshift({
            //         data: null,
            //         name: 'actions',
            //         render: function(data, type, row) {
            //             return `
        //                 <div class="d-inline-flex gap-1">
        //                     <button 
        //                         class="btn btn-outline-warning btn-sm edit-btn-${table}" 
        //                         data-id="${row['id_' + table]}" 
        //                         data-bs-toggle="modal" 
        //                         data-bs-target="#editModal">
        //                         Edit
        //                     </button>
        //                     <button 
        //                         class="btn btn-outline-danger btn-sm delete-btn-${table}" 
        //                         data-id="${row['id_' + table]}" 
        //                         data-bs-toggle="modal" 
        //                         data-bs-target="#deleteModal">
        //                         Delete
        //                     </button>
        //                 </div>
        //             `;
            //         }
            //     });

            //     return columns;
            // }

            // function renderTableHeaders(columns) {
            //     const theadHtml = columns.map(column => {
            //         const label = column.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
            //         return `<th>${label}</th>`;
            //     }).join('');

            //     const fullThead = `<th>Actions</th>${theadHtml}`;
            //     $('#' + table + 'Table thead tr').html(fullThead);
            // }

            // let pencarian = "";

            // $.ajax({
            //     url: "/" + table.replace(/_/g, '-') + "/create",
            //     type: "POST",
            //     data: {
            //         _token: '{{ csrf_token() }}',
            //         pencarian: pencarian,
            //         columns: 'columns'
            //     },
            //     success: function(json) {
            //         renderTableHeaders(json.columns);
            //         // console.log(json.columns);
            //         $('#' + table + 'Table').DataTable({
            //             processing: true,
            //             serverSide: true,
            //             destroy: true,
            //             scrollX: true,
            //             initComplete: function() {
            //                 $('.dt-search').hide();
            //             },
            //             ajax: {
            //                 url: "/" + table.replace(/_/g, '-') + "/create",
            //                 type: "POST",
            //                 data: function(d) {
            //                     d._token = '{{ csrf_token() }}';
            //                     d.pencarian = pencarian;
            //                     d.start = d.start || 0;
            //                     d.length = d.length || 10;
            //                 },
            //                 dataSrc: function(json) {
            //                     return json.data;
            //                 }
            //             },
            //             columns: buatColumns(json.columns),
            //             pageLength: 10
            //         });
            //     }
            // });

            // // Initialize DataTable
            // $('#ordersTable').DataTable({
            //     responsive: true,
            //     dom: '<"top"f>rt<"bottom"lip><"clear">',
            //     pageLength: 5,
            //     lengthMenu: [5, 10, 25, 50],
            //     language: {
            //         search: "_INPUT_",
            //         searchPlaceholder: "Search orders...",
            //     }
            // });

            // // Revenue Chart
            // const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            // const revenueChart = new Chart(revenueCtx, {
            //     type: 'line',
            //     data: {
            //         labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            //         datasets: [{
            //             label: 'Revenue',
            //             data: [12000, 19000, 15000, 22000, 24560, 18000, 21000],
            //             backgroundColor: 'rgba(99, 102, 241, 0.1)',
            //             borderColor: 'rgba(99, 102, 241, 1)',
            //             borderWidth: 2,
            //             tension: 0.4,
            //             fill: true,
            //             pointBackgroundColor: '#fff',
            //             pointBorderWidth: 2,
            //             pointRadius: 4,
            //             pointHoverRadius: 6
            //         }]
            //     },
            //     options: {
            //         responsive: true,
            //         maintainAspectRatio: false,
            //         plugins: {
            //             legend: {
            //                 display: false
            //             },
            //             tooltip: {
            //                 mode: 'index',
            //                 intersect: false
            //             }
            //         },
            //         scales: {
            //             y: {
            //                 beginAtZero: true,
            //                 grid: {
            //                     drawBorder: false,
            //                     color: 'rgba(0, 0, 0, 0.05)'
            //                 },
            //                 ticks: {
            //                     callback: function(value) {
            //                         return '$' + value.toLocaleString();
            //                     }
            //                 }
            //             },
            //             x: {
            //                 grid: {
            //                     display: false
            //                 }
            //             }
            //         },
            //         interaction: {
            //             mode: 'nearest',
            //             axis: 'x',
            //             intersect: false
            //         }
            //     }
            // });

            // // Traffic Chart
            // const trafficCtx = document.getElementById('trafficChart').getContext('2d');
            // const trafficChart = new Chart(trafficCtx, {
            //     type: 'doughnut',
            //     data: {
            //         labels: ['Direct', 'Organic', 'Referral', 'Social'],
            //         datasets: [{
            //             data: [45, 30, 15, 10],
            //             backgroundColor: [
            //                 'rgba(99, 102, 241, 0.8)',
            //                 'rgba(16, 185, 129, 0.8)',
            //                 'rgba(245, 158, 11, 0.8)',
            //                 'rgba(239, 68, 68, 0.8)'
            //             ],
            //             borderWidth: 0,
            //             hoverOffset: 10
            //         }]
            //     },
            //     options: {
            //         responsive: true,
            //         maintainAspectRatio: false,
            //         cutout: '70%',
            //         plugins: {
            //             legend: {
            //                 display: false
            //             }
            //         }
            //     }
            // });

            // // Chart hover info
            // const chartHoverInfo = document.getElementById('chartHoverInfo');
            // document.getElementById('revenueChart').addEventListener('mousemove', function(evt) {
            //     const points = revenueChart.getElementsAtEventForMode(evt, 'nearest', {
            //         intersect: false
            //     }, true);
            //     if (points.length) {
            //         const point = points[0];
            //         const value = revenueChart.data.datasets[point.datasetIndex].data[point.index];
            //         const label = revenueChart.data.labels[point.index];

            //         chartHoverInfo.classList.add('visible');
            //         chartHoverInfo.textContent = `${label}: $${value.toLocaleString()}`;
            //         chartHoverInfo.style.left = `${evt.offsetX + 20}px`;
            //         chartHoverInfo.style.top = `${evt.offsetY}px`;
            //     } else {
            //         chartHoverInfo.classList.remove('visible');
            //     }
            // });

            // document.getElementById('revenueChart').addEventListener('mouseout', function() {
            //     chartHoverInfo.classList.remove('visible');
            // });

            // Header scroll effect
            $(window).scroll(function() {
                if ($(this).scrollTop() > 10) {
                    $('.header').addClass('scrolled');
                } else {
                    $('.header').removeClass('scrolled');
                }
            });

            // Search functionality
            $('#searchInput').on('input', function() {
                const searchTerm = $(this).val().toLowerCase();
                if (searchTerm.length > 2) {
                    // Implement search logic here
                    console.log('Searching for:', searchTerm);
                }
            });

            // Notification dropdown
            $('#notificationBtn').click(function() {
                // Implement notification dropdown
                alert('Notifications would appear here');
            });

            // User profile dropdown
            $('#userBtn').click(function() {
                // Implement user dropdown
                alert('User menu would appear here');
            });

        });
    </script>

    {{-- <script>
        $(document).ready(function() {
            const createFormSelector = '#ibuAddForm';
            const createModalSelector = '#ibuAddModal';

            $('#add-btn-ibu').on('click', function() {
                $(createFormSelector).attr('action', '/ibu/store');
                $(createModalSelector).modal('show');
            });

            $(createFormSelector).submit(function(e) {
                e.preventDefault();
                const url = $(this).attr('action');
                const formData = $(this).serialize();

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    success: function(response) {
                        $(createModalSelector).modal('hide');
                        $('#ibuTable').DataTable().ajax.reload(null, false);

                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.message || 'Data berhasil ditambahkan!',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    },
                    error: function(xhr) {
                        console.error(xhr.responseJSON);
                        alert('Terjadi kesalahan saat menambah data.');
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            const formSelector = '#ibuEditForm';
            const modalSelector = '#ibuEditModal';

            $(document).on('click', '.edit-btn-ibu', function() {
                const id = $(this).data('id');

                $.get(`/ibu/edit/${id}`, function(data) {
                    const ibu = data.data;

                    @foreach ($columns as $index => $column)
                        @if (!($index === 0 || in_array($column, ['created_at', 'updated_at'])))
                            $(`${formSelector} [name='{{ $column }}']`).val(ibu[
                                "{{ $column }}"]);
                        @endif
                    @endforeach

                    $(formSelector).attr('action', `/ibu/update/${id}`);
                    $(modalSelector).modal('show');
                });
            });

            $(formSelector).submit(function(e) {
                e.preventDefault();
                const url = $(this).attr('action');
                const formData = $(this).serialize();

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    success: function(response) {
                        $(modalSelector).modal('hide');
                        $('#ibuTable').DataTable().ajax.reload(null, false);

                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.message || 'Data berhasil diperbarui!',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    },
                    error: function(xhr) {
                        console.error(xhr.responseJSON);
                        alert('Terjadi kesalahan saat memperbarui data.');
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            var selectedRow;

            $(document).on('click', '.delete-btn-' + table, function() {
                var userId = $(this).data('id');
                selectedRow = $(this).closest('tr'); // simpan baris terkait

                var formAction = '/' + table.replace(/_/g, '-') + '/delete/' + userId;

                $('#' + table + 'DeleteForm').attr('action', formAction);
                $('#' + table + 'DeleteModal').modal('show');
            });

            // Submit form dengan AJAX
            $('#' + table + 'DeleteForm').on('submit', function(e) {
                e.preventDefault();

                var form = $(this);
                var actionUrl = form.attr('action');

                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: form.serialize(),
                    success: function(response) {
                        $('#' + table + 'Table').DataTable().row(selectedRow).remove().draw();
                        $('#' + table + 'DeleteModal').modal('hide');

                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.success || 'Data berhasil dihapus!',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script> --}}

    <script>
        function initializeApp(table) {
            // Initialize AOS (Animate On Scroll)
            AOS.init({
                once: true
            });

            // Sidebar Submenu Toggle
            $('.menu-item.has-submenu > a').click(function(e) {
                e.preventDefault();
                $(this).parent().toggleClass('open');
                $(this).find('.menu-arrow').toggleClass('rotate-180');
            });

            // Table Columns Configuration
            function buatColumns(serverColumns) {
                const columns = serverColumns.map(function(column) {
                    return {
                        data: column,
                        name: column
                    };
                });

                columns.unshift({
                    data: null,
                    name: 'actions',
                    render: function(data, type, row) {
                        return `
                        <div class="d-inline-flex gap-1">
                            <button 
                                class="btn btn-outline-warning btn-sm edit-btn-${table}" 
                                data-id="${row['id_' + table]}" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editModal">
                                Edit
                            </button>
                            <button 
                                class="btn btn-outline-danger btn-sm delete-btn-${table}" 
                                data-id="${row['id_' + table]}" 
                                data-bs-toggle="modal" 
                                data-bs-target="#deleteModal">
                                Delete
                            </button>
                        </div>
                    `;
                    }
                });

                return columns;
            }

            function renderTableHeaders(columns) {
                const theadHtml = columns.map(column => {
                    const label = column.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
                    return `<th>${label}</th>`;
                }).join('');

                const fullThead = `<th>Actions</th>${theadHtml}`;
                // console.log(fullThead);
                // console.log(table);
                $('#' + table + 'Table thead tr').html(fullThead);
            }

            // DataTable Initialization
            let pencarian = "";
            $.ajax({
                url: "/" + table.replace(/_/g, '-') + "/create",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    pencarian: pencarian,
                    columns: 'columns'
                },
                success: function(json) {
                    renderTableHeaders(json.columns);
                    $('#' + table + 'Table').DataTable({
                        processing: true,
                        serverSide: true,
                        destroy: true,
                        scrollX: true,
                        initComplete: function() {
                            $('.dt-search').hide();
                        },
                        ajax: {
                            url: "/" + table.replace(/_/g, '-') + "/create",
                            type: "POST",
                            data: function(d) {
                                d._token = '{{ csrf_token() }}';
                                d.pencarian = pencarian;
                                d.start = d.start || 0;
                                d.length = d.length || 10;
                            },
                            dataSrc: function(json) {
                                return json.data;
                            }
                        },
                        columns: buatColumns(json.columns),
                        pageLength: 10
                    });
                }
            });

            // Modal handling for Add, Edit, Delete
            // Add New Record
            $('#add-btn-' + table).on('click', function() {
                const createFormSelector = '#' + table + 'AddForm';
                const createModalSelector = '#' + table + 'AddModal';
                $(createFormSelector).attr('action', '/' + table + '/store');
                $(createModalSelector).modal('show');
            });

            $('#' + table + 'AddForm').submit(function(e) {
                e.preventDefault();
                const url = $(this).attr('action');
                const formData = $(this).serialize();

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    success: function(response) {
                        $('#' + table + 'AddModal').modal('hide');
                        $('#' + table + 'Table').DataTable().ajax.reload(null, false);
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.message || 'Data berhasil ditambahkan!',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    },
                    error: function(xhr) {
                        console.error(xhr.responseJSON);
                        alert('Terjadi kesalahan saat menambah data.');
                    }
                });
            });

            // Edit Record
            $(document).on('click', '.edit-btn-' + table, function() {
                const id = $(this).data('id');
                const formSelector = '#' + table + 'EditForm';
                const modalSelector = '#' + table + 'EditModal';

                $.get('/' + table + '/edit/' + id, function(data) {
                    const record = data.data;
                    @foreach ($columns as $index => $column)
                        @if (!($index === 0 || in_array($column, ['created_at', 'updated_at'])))
                            $(`${formSelector} [name='{{ $column }}']`).val(record[
                                "{{ $column }}"]);
                        @endif
                    @endforeach

                    $(formSelector).attr('action', '/' + table + '/update/' + id);
                    $(modalSelector).modal('show');
                });
            });

            $('#' + table + 'EditForm').submit(function(e) {
                e.preventDefault();
                const url = $(this).attr('action');
                const formData = $(this).serialize();

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    success: function(response) {
                        $('#' + table + 'EditModal').modal('hide');
                        $('#' + table + 'Table').DataTable().ajax.reload(null, false);
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.message || 'Data berhasil diperbarui!',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    },
                    error: function(xhr) {
                        console.error(xhr.responseJSON);
                        alert('Terjadi kesalahan saat memperbarui data.');
                    }
                });
            });

            // Delete Record
            var selectedRow;
            $(document).on('click', '.delete-btn-' + table, function() {
                var userId = $(this).data('id');
                selectedRow = $(this).closest('tr');
                var formAction = '/' + table.replace(/_/g, '-') + '/delete/' + userId;
                $('#' + table + 'DeleteForm').attr('action', formAction);
                $('#' + table + 'DeleteModal').modal('show');
            });

            $('#' + table + 'DeleteForm').on('submit', function(e) {
                e.preventDefault();
                var form = $(this);
                var actionUrl = form.attr('action');

                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: form.serialize(),
                    success: function(response) {
                        $('#' + table + 'Table').DataTable().row(selectedRow).remove().draw();
                        $('#' + table + 'DeleteModal').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.success || 'Data berhasil dihapus!',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            // Header scroll effect
            $(window).scroll(function() {
                if ($(this).scrollTop() > 10) {
                    $('.header').addClass('scrolled');
                } else {
                    $('.header').removeClass('scrolled');
                }
            });

            // Search functionality
            $('#searchInput').on('input', function() {
                const searchTerm = $(this).val().toLowerCase();
                if (searchTerm.length > 2) {
                    console.log('Searching for:', searchTerm);
                }
            });

            // Notification dropdown
            $('#notificationBtn').click(function() {
                alert('Notifications would appear here');
            });

            // User profile dropdown
            $('#userBtn').click(function() {
                alert('User menu would appear here');
            });
        }

        $(document).ready(function() {
            @if (isset($table))
                initializeApp("{{ $table }}");
            @endif
        });
    </script>

    <script>
        function loadContent(event, element, tabel) {
            event.preventDefault();
            const url = '/ajax';

            document.querySelectorAll('.sidebar-menu a').forEach(link => {
                link.classList.remove('active');
            });
            element.classList.add('active');

            const mainContent = document.querySelector('.main-content');
            if (!mainContent) {
                console.error('Elemen .main-content tidak ditemukan.');
                return;
            }

            mainContent.innerHTML = '<div class="loading">Loading...</div>';

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        table: tabel
                    })
                })
                .then(response => response.text())
                .then(html => {
                    mainContent.innerHTML = html;
                    history.pushState({}, '', '/' + tabel);
                    initPageScripts();
                })
                .then(() => {
                    initializeApp(tabel);
                })
                .catch(error => {
                    mainContent.innerHTML = `<div class="error">Error loading content: ${error.message}</div>`;
                });
        }

        window.addEventListener('popstate', function() {
            loadContent({
                preventDefault: () => {}
            }, {
                getAttribute: () => location.pathname,
                classList: document.querySelector(`.sidebar-menu a[href="${location.pathname}"]`)?.classList
            });
        });

        function initPageScripts() {
            console.log('Initializing scripts for new content');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const initialLink = document.querySelector('.sidebar-menu a.active') ||
                document.querySelector('.sidebar-menu a');
            if (initialLink) {
                loadContent({
                    preventDefault: () => {}
                }, initialLink);
            }
        });
    </script>

</body>

</html>
