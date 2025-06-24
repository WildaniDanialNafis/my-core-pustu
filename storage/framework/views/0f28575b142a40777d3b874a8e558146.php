<div class="stats-grid">
    <div class="stat-card primary fade-in" data-aos="fade-up" data-aos-duration="800">
        <i class="fas fa-female stat-icon"></i>
        <div class="stat-value" id="ibu-hamil-aktif">132</div>
        <div class="stat-title">Jumlah Ibu Hamil Saat Ini</div>
        <div class="stat-change positive">
            <i class="fas fa-info-circle"></i> Dalam Masa Kehamilan
        </div>
    </div>

    <div class="stat-card success fade-in" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <i class="fas fa-baby stat-icon"></i>
        <div class="stat-value" id="balita-aktif">312</div>
        <div class="stat-title">Jumlah Balita Terdata</div>
        <div class="stat-change positive">
            <i class="fas fa-child"></i> Usia di Bawah 5 Tahun
        </div>
    </div>

    <div class="stat-card warning fade-in" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <i class="fas fa-heartbeat stat-icon"></i>
        <div class="stat-value" id="persalinan-bulan-ini">17</div>
        <div class="stat-title">Jumlah Persalinan Bulan Ini</div>
        <div class="stat-change positive">
            <i class="fas fa-calendar-alt"></i> Update Bulanan
        </div>
    </div>

    <div class="stat-card danger fade-in" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
        <i class="fas fa-notes-medical stat-icon"></i>
        <div class="stat-value" id="risk-terpantau">9</div>
        <div class="stat-title">Risiko Tinggi Terdeteksi Bulan Ini</div>
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
                <h5 class="card-title">Cakupan Layanan Ibu Hamil Bulan Ini</h5>
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-calendar-alt me-1"></i> Bulan Ini
                    </button>
                    
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
                <h5 class="card-title mb-0">Distribusi Kelahiran Bulan Ini</h5>
                <small class="text-muted">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-calendar-alt me-1"></i> Bulan Ini
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
<?php /**PATH /var/www/my-core-pustu/resources/views/admin/layouts2/dashboard-main.blade.php ENDPATH**/ ?>