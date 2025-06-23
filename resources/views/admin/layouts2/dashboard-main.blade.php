<div class="stats-grid">
    <div class="stat-card primary fade-in" data-aos="fade-up" data-aos-duration="800">
        <i class="fas fa-female stat-icon"></i>
        <div class="stat-value" id="ibu-hamil-aktif">132</div>
        <div class="stat-title">Ibu Hamil Aktif</div>
        <div class="stat-change positive">
            <i class="fas fa-info-circle"></i> Belum Melahirkan
        </div>
    </div>

    <div class="stat-card success fade-in" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <i class="fas fa-baby stat-icon"></i>
        <div class="stat-value" id="balita-aktif">312</div>
        <div class="stat-title">Balita Aktif</div>
        <div class="stat-change positive">
            <i class="fas fa-child"></i> Usia < 5 Tahun
        </div>
    </div>

    <div class="stat-card warning fade-in" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <i class="fas fa-heartbeat stat-icon"></i>
        <div class="stat-value" id="persalinan-bulan-ini">17</div>
        <div class="stat-title">Persalinan Bulan Ini</div>
        <div class="stat-change positive">
            <i class="fas fa-calendar-alt"></i> Update Bulanan
        </div>
    </div>

    <div class="stat-card danger fade-in" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
        <i class="fas fa-notes-medical stat-icon"></i>
        <div class="stat-value" id="risk-terpantau">9</div>
        <div class="stat-title">Risiko Tinggi Terpantau</div>
        <div class="stat-change negative">
            <i class="fas fa-user-check"></i> Sudah Diperiksa
        </div>
    </div>
</div>

<!-- CHARTS ROW -->
<div class="row">
    <div class="col-md-8">
        <div class="card" data-aos="fade-up" data-aos-duration="800">
            <div class="card-header">
                <h5 class="card-title">Cakupan Layanan Ibu Hamil</h5>
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-calendar-alt me-1"></i> Bulan ini
                    </button>
                    {{-- <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                        <li><a class="dropdown-item" href="#">3 Bulan Terakhir</a></li>
                        <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                    </ul> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Kelahiran Bulan Ini Berdasarkan Jenis Kelamin</h5>
                <small class="text-muted">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-calendar-alt me-1"></i> Bulan ini
                    </button>
                </small>
            </div>
            <div class="card-body">
                <div class="chart-container mb-3">
                    <canvas id="trafficChart" height="200"></canvas>
                </div>
                <div class="traffic-legend mt-2"></div>
            </div>
        </div>
    </div>
</div>

{{-- <!-- RISIKO TINGGI DAN IMUNISASI -->
<div class="row mt-4">
    <div class="col-md-8">
        <div class="card" data-aos="fade-up" data-aos-duration="800">
            <div class="card-header">
                <h5 class="card-title">Ibu Risiko Tinggi</h5>
                <button class="btn btn-sm btn-outline-primary">Lihat Semua</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Usia Kehamilan</th>
                                <th>Risiko</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Siti Aisyah</td>
                                <td>32 minggu</td>
                                <td>Pre-eklamsia</td>
                                <td><span class="badge bg-warning">Belum ditindaklanjuti</span></td>
                                <td><button class="btn btn-sm btn-outline-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>Nuraini</td>
                                <td>28 minggu</td>
                                <td>Kurang Energi Kronis</td>
                                <td><span class="badge bg-success">Sudah dikunjungi</span></td>
                                <td><button class="btn btn-sm btn-outline-primary">Detail</button></td>
                            </tr>
                            <tr>
                                <td>Dewi Lestari</td>
                                <td>24 minggu</td>
                                <td>Anemia Berat</td>
                                <td><span class="badge bg-danger">Perlu Rujukan</span></td>
                                <td><button class="btn btn-sm btn-outline-primary">Detail</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <div class="card-header">
                <h5 class="card-title">Balita Belum Imunisasi Lengkap</h5>
            </div>
            <div class="card-body">
                <div class="top-products-list">
                    <div class="product-item d-flex mb-3">
                        <div class="product-img me-3">
                            <img src="https://randomuser.me/api/portraits/children/12.jpg" class="rounded" width="60" height="60">
                        </div>
                        <div class="product-info">
                            <h6 class="mb-0">Rizky Maulana</h6>
                            <small class="text-muted">Usia: 9 bulan</small>
                            <div class="product-stats d-flex justify-content-between mt-1">
                                <span class="text-danger">HB-0, Polio 1</span>
                                <span class="text-muted">Belum Lengkap</span>
                            </div>
                        </div>
                    </div>

                    <div class="product-item d-flex">
                        <div class="product-img me-3">
                            <img src="https://randomuser.me/api/portraits/children/18.jpg" class="rounded" width="60" height="60">
                        </div>
                        <div class="product-info">
                            <h6 class="mb-0">Indah Putri</h6>
                            <small class="text-muted">Usia: 6 bulan</small>
                            <div class="product-stats d-flex justify-content-between mt-1">
                                <span class="text-danger">BCG, Polio 2</span>
                                <span class="text-muted">Belum Lengkap</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
