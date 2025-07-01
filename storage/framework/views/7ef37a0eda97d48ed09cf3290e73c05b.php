<!-- Page Header -->
<div class="page-header">
    <div class="page-title">
        <h1 class="animate__animated animate__fadeIn" id="my-title1"><?php echo e($title ?? ''); ?></h1>
        <ul class="breadcrumb animate__animated animate__fadeIn animate__delay-1s">
            <li class="breadcrumb-item"><a href="#" id="my-title1"><?php echo e($title ?? ''); ?></a></li>
            <li class="breadcrumb-item active" id="my-title1">Data <?php echo e($title ?? ''); ?></li>
        </ul>
    </div>

    <div class="page-actions">
        <!-- Import Button -->
        
        
        <!-- Export Button -->
        <button class="btn btn-outline-primary animate__animated animate__fadeIn animate__delay-2s me-2"
                data-url="<?php echo e(route(str_replace('_', '-', $table) . '.export')); ?>"
                onclick="window.location.href = this.dataset.url">
            <i class="fas fa-download me-2"></i>Export
        </button>
        
        <!-- Add New Button -->
        <button class="btn btn-primary animate__animated animate__fadeIn animate__delay-2s"
                id="<?php echo e('add-btn-' . $table ?? ''); ?>">
            <i class="fas fa-plus me-2"></i>Tambah Baru
        </button>
    </div>
</div>

<!-- Import Modal -->
<div class="modal fade" id="importModal-<?php echo e($table); ?>" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">Import Data <?php echo e($title ?? ''); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo e(route(str_replace('_', '-', $table) . '.import')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="importFile-<?php echo e($table); ?>" class="form-label">Pilih File</label>
                        <input class="form-control" type="file" id="importFile-<?php echo e($table); ?>" name="file" 
                               accept=".xlsx,.xls,.csv" required>
                        <div class="form-text">Format file: .xlsx, .xls, atau .csv</div>
                    </div>
                    <div class="alert alert-info mt-3">
                        <i class="fas fa-info-circle me-2"></i>
                        Untuk hasil terbaik, gunakan template ekspor sebagai referensi.
                        <a href="<?php echo e(route(str_replace('_', '-', $table) . '.export')); ?>" class="fw-bold">
                            Download Template
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-upload me-2"></i>Import
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card" data-aos="fade-up" data-aos-duration="800">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Data <?php echo e($title ?? ''); ?></h5>
                    <button class="btn btn-sm btn-outline-primary">Lihat Semua</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="<?php echo e($table . 'Table'); ?>">
                            <thead>
                                <tr>
                                    <!-- Table headers will be dynamically inserted here -->
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Table data will be dynamically inserted here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<?php echo $__env->make('admin.layouts2.create-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('admin.layouts2.edit-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('admin.layouts2.delete-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/my-core-pustu/resources/views/admin/layouts2/ajax.blade.php ENDPATH**/ ?>