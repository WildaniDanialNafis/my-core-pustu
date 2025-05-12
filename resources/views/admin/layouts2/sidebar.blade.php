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

        <li class="menu-title" style="--delay: 5">Ibu</li>

        <li class="menu-item has-submenu" style="--delay: 6">
            <a class="mb-2">
                <span class="menu-icon"><i class="fas fa-user-nurse"></i></span>
                <span class="menu-text">Ibu</span>
                <span class="menu-arrow"><i class="fas fa-chevron-right"></i></span>
            </a>

            <ul class="submenu list-unstyled">
                <li class="mb-2" style="--delay: 1"><a href="/ibu" onclick="loadContent(event, this)">Ibu</a></li>
                <li class="mb-2" style="--delay: 2"><a href="/keluarga"
                        onclick="loadContent(event, this)">Keluarga</a></li>
                <li class="mb-2" style="--delay: 3"><a href="/kesehatan1" onclick="loadContent(event, this)">Kesehatan
                        1</a></li>
                <li class="mb-2" style="--delay: 4"><a href="/kesehatan2" onclick="loadContent(event, this)">Kesehatan
                        2</a></li>
                <li class="mb-2" style="--delay: 5"><a href="/kesehatan-bersalin"
                        onclick="loadContent(event, this)">Kesehatan Bersalin</a></li>
                <li class="mb-2" style="--delay: 6"><a href="/kesehatan-nifas"
                        onclick="loadContent(event, this)">Kesehatan Nifas</a></li>
                <li class="mb-2" style="--delay: 7"><a href="/kontrol-ttd" onclick="loadContent(event, this)">Kontrol
                        TTD</a></li>
                <li class="mb-2" style="--delay: 8"><a href="/minum-ttd" onclick="loadContent(event, this)">Minum
                        TTD</a></li>
                <li class="mb-2" style="--delay: 9"><a href="/menyambut-persalinan"
                        onclick="loadContent(event, this)">Menyambut Persalinan</a></li>
                <li class="mb-2" style="--delay: 10"><a href="/amanat-penolong-persalinan"
                        onclick="loadContent(event, this)">Amanat Penolong Persalinan</a></li>
                <li class="mb-2" style="--delay: 11"><a href="/amanat-kendaraan"
                        onclick="loadContent(event, this)">Amanat Kendaraan</a></li>
                <li class="mb-2" style="--delay: 12"><a href="/amanat-darah" onclick="loadContent(event, this)">Amanat
                        Darah</a></li>
                <li class="mb-2" style="--delay: 13"><a href="/evaluasi-kesehatan-bumil"
                        onclick="loadContent(event, this)">Evaluasi Kesehatan Bumil</a></li>
                <li class="mb-2" style="--delay: 14"><a href="/kondisi-kesehatan-bumil"
                        onclick="loadContent(event, this)">Kondisi Kesehatan Bumil</a></li>
                <li class="mb-2" style="--delay: 15"><a href="/imunisasi-t"
                        onclick="loadContent(event, this)">Imunisasi T</a></li>
                <li class="mb-2" style="--delay: 16"><a href="/riwayat-kesehatan-bumil"
                        onclick="loadContent(event, this)">Riwayat Kesehatan Bumil</a></li>
                <li class="mb-2" style="--delay: 17"><a href="/riwayat-perilaku-berisiko"
                        onclick="loadContent(event, this)">Riwayat Perilaku Berisiko</a></li>
                <li class="mb-2" style="--delay: 18"><a href="/riwayat-kehamilan"
                        onclick="loadContent(event, this)">Riwayat Kehamilan</a></li>
                <li class="mb-2" style="--delay: 19"><a href="/riwayat-penyakit-keluarga"
                        onclick="loadContent(event, this)">Riwayat Penyakit Keluarga</a></li>
                <li class="mb-2" style="--delay: 20"><a href="/pemeriksaan-khusus"
                        onclick="loadContent(event, this)">Pemeriksaan Khusus</a></li>
                <li class="mb-2" style="--delay: 21"><a href="/pemeriksaan-trimester1"
                        onclick="loadContent(event, this)">Pemeriksaan Trimester 1</a></li>
                <li class="mb-2" style="--delay: 22"><a href="/pemeriksaan-fisik-tri1"
                        onclick="loadContent(event, this)">Pemeriksaan Fisik Trimester 1</a></li>
                <li class="mb-2" style="--delay: 23"><a href="/usg-tri1" onclick="loadContent(event, this)">USG
                        Trimester 1</a></li>
                <li class="mb-2" style="--delay: 24"><a href="/pemeriksaan-laboratorium-tri1"
                        onclick="loadContent(event, this)">Pemeriksaan Laboratorium Trimester 1</a></li>
                <li class="mb-2" style="--delay: 25"><a href="/evaluasi-kehamilan"
                        onclick="loadContent(event, this)">Evaluasi Kehamilan</a></li>
                <li class="mb-2" style="--delay: 26"><a href="/berat-badan-bumil"
                        onclick="loadContent(event, this)">Berat Badan Bumil</a></li>
                <li class="mb-2" style="--delay: 27"><a href="/skrining-preeklampsia"
                        onclick="loadContent(event, this)">Skrining Preeklampsia</a></li>
                <li class="mb-2" style="--delay: 28"><a href="/preeklampsia-anamnesis"
                        onclick="loadContent(event, this)">Preeklampsia Anamnesis</a></li>
                <li class="mb-2" style="--delay: 29"><a href="/preeklampsia-fisik"
                        onclick="loadContent(event, this)">Preeklampsia Fisik</a></li>
                <li class="mb-2" style="--delay: 30"><a href="/pemeriksaan-trimester3"
                        onclick="loadContent(event, this)">Pemeriksaan Trimester 3</a></li>
                <li class="mb-2" style="--delay: 31"><a href="/pemeriksaan-fisik-tri3"
                        onclick="loadContent(event, this)">Pemeriksaan Fisik Trimester 3</a></li>
                <li class="mb-2" style="--delay: 32"><a href="/usg-tri3" onclick="loadContent(event, this)">USG
                        Trimester 3</a></li>
                <li class="mb-2" style="--delay: 33"><a href="/pemeriksaan-laboratorium-tri3"
                        onclick="loadContent(event, this)">Pemeriksaan Laboratorium Trimester 3</a></li>
                <li class="mb-2" style="--delay: 34"><a href="/ringkasan-kesehatan"
                        onclick="loadContent(event, this)">Ringkasan Kesehatan</a></li>
                <li class="mb-2" style="--delay: 35"><a href="/ibu-bersalin"
                        onclick="loadContent(event, this)">Ibu Bersalin</a></li>
                <li class="mb-2" style="--delay: 36"><a href="/bayi-lahir" onclick="loadContent(event, this)">Bayi
                        Lahir</a></li>
                <li class="mb-2" style="--delay: 37"><a href="/ringkasan-nifas"
                        onclick="loadContent(event, this)">Ringkasan Nifas</a></li>
                <li class="mb-2" style="--delay: 38"><a href="/ringkasan-kesimpulan-nifas"
                        onclick="loadContent(event, this)">Ringkasan Kesimpulan Nifas</a></li>
                <li class="mb-2" style="--delay: 39"><a href="/rujukan"
                        onclick="loadContent(event, this)">Rujukan</a></li>
            </ul>

        </li>

        <li class="menu-title" style="--delay: 7">Anak</li>

        <li class="menu-item has-submenu" style="--delay: 8">
            <a class="mb-2">
                <span class="menu-icon"><i class="fas fa-baby"></i></span>
                <span class="menu-text">Anak</span>
                <span class="menu-arrow"><i class="fas fa-chevron-right"></i></span>
            </a>

            <ul class="submenu list-unstyled">
                <li><a href="/anak" onclick="loadContent(event, this)">Anak</a></li>
                <li><a href="/wali" onclick="loadContent(event, this)">Wali</a></li>
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
