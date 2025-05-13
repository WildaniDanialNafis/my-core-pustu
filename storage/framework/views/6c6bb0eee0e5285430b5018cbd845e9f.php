<?php $__env->startSection('title', 'SB Admin 2 - Tables'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createIbuModal">
                    + Tambah
                </button>
                <!-- Modal -->
                <div class="modal fade" id="createIbuModal" tabindex="-1" aria-labelledby="createIbuModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createIbuModalLabel">Tambah Data Pengguna</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form id="formTambahData" method="POST" action="<?php echo e(route('ibu.store')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="modal-body">
                                    <!-- Form untuk input data -->
                                    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Cek apakah kolom adalah id (gunakan index) atau 'created_at' / 'updated_at' (gunakan nama kolom) -->
                                        <?php if(!($index === 0 || in_array($column, ['created_at', 'updated_at']))): ?>
                                            <div class="mb-3">
                                                <label for="<?php echo e($column); ?>" class="form-label">
                                                    <?php echo e(ucfirst(str_replace('_', ' ', $column))); ?>

                                                </label>

                                                <?php
                                                    // Mendapatkan tipe kolom
                                                    $type = $columnTypes[$column];
                                                    // Tentukan tipe input berdasarkan tipe kolom
                                                    $inputType = 'text'; // Default type

                                                    if ($type === 'bigint') {
                                                        $inputType = 'number';
                                                    } elseif ($type === 'varchar' || $type === 'char') {
                                                        $inputType = 'text';
                                                    } elseif ($type === 'date') {
                                                        $inputType = 'date';
                                                    } elseif ($type === 'timestamp') {
                                                        $inputType = 'datetime-local';
                                                    } elseif ($type === 'text') {
                                                        $inputType = 'textarea';
                                                    }

                                                    // Untuk kolom 'id_user', ganti menjadi 'select'
                                                    if ($column === 'id_user') {
                                                        $inputType = 'select';
                                                    }
                                                ?>

                                                <?php if($inputType == 'select'): ?>
                                                    <select class="form-select" id="<?php echo e($column); ?>"
                                                        name="<?php echo e($column); ?>" required>
                                                        <option value="" disabled selected>Pilih Pengguna</option>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                <?php elseif($inputType == 'textarea'): ?>
                                                    <textarea class="form-control" id="<?php echo e($column); ?>" name="<?php echo e($column); ?>" placeholder="<?php echo e($column); ?>"
                                                        required></textarea>
                                                <?php else: ?>
                                                    <input type="<?php echo e($inputType); ?>" class="form-control"
                                                        id="<?php echo e($column); ?>" name="<?php echo e($column); ?>"
                                                        placeholder="<?php echo e($column); ?>" required>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <!-- Tombol Submit -->
                                    <button type="submit" class="btn btn-primary" id="submitForm">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Edit User -->
                <div class="modal fade" id="editIbuModal" tabindex="-1" aria-labelledby="editIbuModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editIbuModalLabel">Edit Identitas Ibu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form id="editIbuForm" method="POST" action="<?php echo e(route('ibu.update', ['id' => ':id'])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="modal-body">
                                    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Cek apakah kolom adalah id (gunakan index) atau 'created_at' / 'updated_at' (gunakan nama kolom) -->
                                        <?php if(!($index === 0 || in_array($column, ['created_at', 'updated_at']))): ?>
                                            <div class="mb-3">
                                                <label for="<?php echo e($column); ?>" class="form-label">
                                                    <?php echo e(ucfirst(str_replace('_', ' ', $column))); ?>

                                                </label>

                                                <?php
                                                    // Mendapatkan tipe kolom
                                                    $type = $columnTypes[$column];
                                                    // Tentukan tipe input berdasarkan tipe kolom
                                                    $inputType = 'text'; // Default type

                                                    if ($type === 'bigint') {
                                                        $inputType = 'number';
                                                    } elseif ($type === 'varchar' || $type === 'char') {
                                                        $inputType = 'text';
                                                    } elseif ($type === 'date') {
                                                        $inputType = 'date';
                                                    } elseif ($type === 'timestamp') {
                                                        $inputType = 'datetime-local';
                                                    } elseif ($type === 'text') {
                                                        $inputType = 'textarea';
                                                    }

                                                    // Untuk kolom 'id_user', ganti menjadi 'select'
                                                    if ($column === 'id_user') {
                                                        $inputType = 'select';
                                                    }
                                                ?>

                                                <?php if($inputType == 'select'): ?>
                                                    <select class="form-select" id="<?php echo e($column); ?>"
                                                        name="<?php echo e($column); ?>" required>
                                                        <option value="" disabled selected>Pilih Pengguna</option>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                <?php elseif($inputType == 'textarea'): ?>
                                                    <textarea class="form-control" id="<?php echo e($column); ?>" name="<?php echo e($column); ?>" placeholder="<?php echo e($column); ?>"
                                                        required></textarea>
                                                <?php else: ?>
                                                    <input type="<?php echo e($inputType); ?>" class="form-control"
                                                        id="<?php echo e($column); ?>" name="<?php echo e($column); ?>"
                                                        placeholder="<?php echo e($column); ?>" required>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </div>
                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" id="submitForm">Simpan Perubahan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <?php echo $__env->make('admin.components.table', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /app/resources/views/admin/pages/ibu.blade.php ENDPATH**/ ?>