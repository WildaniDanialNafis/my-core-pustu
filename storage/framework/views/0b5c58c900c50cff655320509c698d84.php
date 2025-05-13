<div class="modal fade" id="<?php echo e($table . 'EditModal'); ?>" tabindex="-1" aria-labelledby="<?php echo e($table . 'EditModalLabel'); ?>"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="<?php echo e($table . 'EditModalLabel'); ?>">Edit <?php echo e($table); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="<?php echo e($table . 'EditForm'); ?>" method="POST" action="<?php echo e('/' . $table . '/update/:id'); ?>">
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

                                    // Untuk kolom 'id_foreign', ganti menjadi 'select'
                                    if ($column === $foreignColumn) {
                                        $inputType = 'select';
                                    }
                                ?>

                                <?php if($inputType == 'select'): ?>
                                    <select class="form-select" id="<?php echo e($column); ?>" name="<?php echo e($column); ?>"
                                        required>
                                        <option value="" disabled selected>Pilih Pengguna</option>
                                        <?php $__currentLoopData = $foreignDatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foreignData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($foreignData[$foreignColumn]); ?>">
                                                <?php echo e($foreignData[$columnDiambil[1]]); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                <?php elseif($inputType == 'textarea'): ?>
                                    <textarea class="form-control" id="<?php echo e($column); ?>" name="<?php echo e($column); ?>" placeholder="<?php echo e($column); ?>"
                                        required></textarea>
                                <?php else: ?>
                                    <input type="<?php echo e($inputType); ?>" class="form-control" id="<?php echo e($column); ?>"
                                        name="<?php echo e($column); ?>" placeholder="<?php echo e($column); ?>" required>
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
<?php /**PATH /app/resources/views/admin/components/edit-modal.blade.php ENDPATH**/ ?>