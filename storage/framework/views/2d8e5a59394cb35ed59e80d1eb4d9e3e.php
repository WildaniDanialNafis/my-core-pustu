<!-- Edit Modal -->
<div class="modal fade" id="<?php echo e($table . 'EditModal'); ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editModalLabel">
                    <i class="fas fa-edit me-2"></i>Edit Data
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form id="<?php echo e($table . 'EditForm'); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="modal-body">
                    <div id="editModalContent">
                        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(!($index === 0 || in_array($column, ['created_at', 'updated_at']))): ?>
                                <div class="mb-3">
                                    <label for="<?php echo e($column); ?>" class="form-label">
                                        <?php echo e(ucfirst(str_replace('_', ' ', $column))); ?>

                                    </label>

                                    <?php
                                        $type = $columnTypes[$column];
                                        $inputType = 'text';

                                        if ($type === 'bigint') {
                                            $inputType = 'number';
                                        } elseif (in_array($type, ['varchar', 'char'])) {
                                            $inputType = 'text';
                                        } elseif ($type === 'date') {
                                            $inputType = 'date';
                                        } elseif ($type === 'timestamp') {
                                            $inputType = 'datetime-local';
                                        } elseif ($type === 'text') {
                                            $inputType = 'textarea';
                                        }

                                        if ($column === $foreignColumn) {
                                            $inputType = 'select';
                                        }
                                    ?>

                                    <?php if($inputType === 'select'): ?>
                                        <select class="form-select" id="<?php echo e($column); ?>" name="<?php echo e($column); ?>">
                                            <option value="" disabled selected>Pilih Pengguna</option>
                                            <?php $__currentLoopData = $foreignDatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foreignData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($foreignData[$foreignColumn]); ?>">
                                                    <?php echo e($foreignData[$columnDiambil[1]]); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    <?php elseif($inputType === 'textarea'): ?>
                                        <textarea class="form-control" id="<?php echo e($column); ?>" name="<?php echo e($column); ?>"
                                            placeholder="<?php echo e($column); ?>"></textarea>
                                    <?php else: ?>
                                        <input type="<?php echo e($inputType); ?>" class="form-control" id="<?php echo e($column); ?>"
                                            name="<?php echo e($column); ?>" placeholder="<?php echo e($column); ?>">
                                    <?php endif; ?>

                                    
                                    <div class="invalid-feedback d-block" id="error-<?php echo e($column); ?>"></div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Batal
                    </button>
                    <button type="submit" class="btn btn-warning text-white">
                        <i class="fas fa-save me-2"></i>Perbarui
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /var/www/my-core-pustu/resources/views/admin/layouts2/edit-modal.blade.php ENDPATH**/ ?>