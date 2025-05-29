<div class="page-header">
    <div class="page-title">
        <h1 class="animate__animated animate__fadeIn">Dashboard Overview</h1>
        <ul class="breadcrumb animate__animated animate__fadeIn animate__delay-1s">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ul>
    </div>

    <div class="page-actions">
        <button class="btn btn-outline-primary animate__animated animate__fadeIn animate__delay-2s">
            <i class="fas fa-download"></i> Export
        </button>
        <button class="btn btn-primary animate__animated animate__fadeIn animate__delay-2s">
            <i class="fas fa-plus"></i> Add New
        </button>
    </div>
</div>

<!-- Charts Row -->
<div class="row">
    <div class="col-md-8">
        <div class="card" data-aos="fade-up" data-aos-duration="800">
            <div class="card-header">
                <h5 class="card-title">Revenue Overview</h5>
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="chartDropdown"
                        data-bs-toggle="dropdown">
                        This Month
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="revenueChart"></canvas>
                    <div class="chart-hover-info" id="chartHoverInfo"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <div class="card-header">
                <h5 class="card-title">Traffic Sources</h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="trafficChart"></canvas>
                </div>
                <div class="traffic-legend mt-3">
                    <div class="traffic-item d-flex align-items-center mb-2">
                        <div class="traffic-color bg-primary rounded-circle" style="width: 12px; height: 12px;">
                        </div>
                        <small class="ms-2">Direct - 45%</small>
                    </div>
                    <div class="traffic-item d-flex align-items-center mb-2">
                        <div class="traffic-color bg-success rounded-circle" style="width: 12px; height: 12px;">
                        </div>
                        <small class="ms-2">Organic - 30%</small>
                    </div>
                    <div class="traffic-item d-flex align-items-center mb-2">
                        <div class="traffic-color bg-warning rounded-circle" style="width: 12px; height: 12px;">
                        </div>
                        <small class="ms-2">Referral - 15%</small>
                    </div>
                    <div class="traffic-item d-flex align-items-center">
                        <div class="traffic-color bg-danger rounded-circle" style="width: 12px; height: 12px;">
                        </div>
                        <small class="ms-2">Social - 10%</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/my-core-pustu/resources/views/admin/layouts-grafik/main.blade.php ENDPATH**/ ?>