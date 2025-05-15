        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title">
                <h1 class="animate__animated animate__fadeIn"><?php echo e($table); ?></h1>
                <ul class="breadcrumb animate__animated animate__fadeIn animate__delay-1s">
                    <li class="breadcrumb-item"><a href="#"><?php echo e($table); ?></a></li>
                    <li class="breadcrumb-item active">Data <?php echo e($table); ?></li>
                </ul>
            </div>

            <div class="page-actions">
                <button class="btn btn-outline-primary animate__animated animate__fadeIn animate__delay-2s">
                    <i class="fas fa-download me-2"></i>Export
                </button>
                <button class="btn btn-primary animate__animated animate__fadeIn animate__delay-2s"
                    id="<?php echo e('add-btn-' . $table); ?>" data-bs-toggle="modal"
                    data-bs-target="<?php echo e('#' . $table . 'AddModal'); ?>">
                    <i class="fas fa-plus me-2"></i>Tambah Baru
                </button>
            </div>
        </div>

        <!-- Recent Orders & Top Products -->
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card" data-aos="fade-up" data-aos-duration="800">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Data <?php echo e($table); ?></h5>
                            <button class="btn btn-sm btn-outline-primary">Lihat Semua</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="<?php echo e($table . 'Table'); ?>">
                                    <thead>
                                        <tr>

                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php echo $__env->make('admin.layouts2.create-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('admin.layouts2.edit-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('admin.layouts2.delete-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /var/www/my-core-pustu/resources/views/admin/layouts2/ajax.blade.php ENDPATH**/ ?>