<div class="page-header">
    <div class="page-title">
        <h1 class="animate__animated animate__fadeIn" id="my-title1"><?php echo e($title ?? ''); ?></h1>
        <ul class="breadcrumb animate__animated animate__fadeIn animate__delay-1s">
            <li class="breadcrumb-item"><a href="#" id="my-title1"><?php echo e($title ?? ''); ?></a></li>
            <li class="breadcrumb-item active" id="my-title1">Data <?php echo e($title ?? ''); ?></li>
        </ul>
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

    
</div>
<?php /**PATH /var/www/my-core-pustu/resources/views/admin/layouts-grafik/main.blade.php ENDPATH**/ ?>