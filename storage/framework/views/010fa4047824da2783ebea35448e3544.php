<?php $__env->startSection('title', 'LAPORAN KUNJUNGAN PASIEN'); ?>
<?php $__env->startSection('subtitle', 'Bulan Januari 2023'); ?>

<?php $__env->startSection('report-info'); ?>
    <div class="report-info-item"><strong>Periode:</strong> 1 - 31 Januari 2023</div>
    <div class="report-info-item"><strong>Lokasi PUSTU:</strong> Desa Sukamaju</div>
    <div class="report-info-item"><strong>Penanggung Jawab:</strong> dr. Ani Wijaya</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
        $kunjungan = [
            ['tanggal' => '01-01-2023', 'umum' => 5, 'kia' => 2, 'lansia' => 1],
            ['tanggal' => '03-01-2023', 'umum' => 7, 'kia' => 3, 'lansia' => 2],
            ['tanggal' => '05-01-2023', 'umum' => 4, 'kia' => 1, 'lansia' => 3],
            ['tanggal' => '07-01-2023', 'umum' => 6, 'kia' => 4, 'lansia' => 1],
        ];

        foreach ($kunjungan as &$row) {
            $row['total'] = $row['umum'] + $row['kia'] + $row['lansia'];
        }

        $total = [
            'umum' => array_sum(array_column($kunjungan, 'umum')),
            'kia' => array_sum(array_column($kunjungan, 'kia')),
            'lansia' => array_sum(array_column($kunjungan, 'lansia')),
            'semua' => array_sum(array_column($kunjungan, 'total')),
        ];
    ?>

    <h3 style="text-align: center; margin-bottom: 15px;">DATA KUNJUNGAN PASIEN</h3>

    <table class="report-table">
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Tanggal</th>
                <th colspan="3">Jenis Kunjungan</th>
                <th rowspan="2">Total</th>
            </tr>
            <tr>
                <th>Umum</th>
                <th>KIA</th>
                <th>Lansia</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $kunjungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($index + 1); ?></td>
                <td><?php echo e($data['tanggal']); ?></td>
                <td class="text-center"><?php echo e($data['umum']); ?></td>
                <td class="text-center"><?php echo e($data['kia']); ?></td>
                <td class="text-center"><?php echo e($data['lansia']); ?></td>
                <td class="text-center"><?php echo e($data['total']); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-bold">
                <td colspan="2">TOTAL</td>
                <td class="text-center"><?php echo e($total['umum']); ?></td>
                <td class="text-center"><?php echo e($total['kia']); ?></td>
                <td class="text-center"><?php echo e($total['lansia']); ?></td>
                <td class="text-center"><?php echo e($total['semua']); ?></td>
            </tr>
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        <h4>Catatan:</h4>
        <p>1. Kunjungan umum termasuk penyakit umum dan imunisasi dasar</p>
        <p>2. Kunjungan KIA meliputi antenatal care dan postnatal care</p>
        <p>3. Kunjungan lansia untuk pemeriksaan kesehatan rutin usia >60 tahun</p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts2.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/my-core-pustu/resources/views/admin/layouts2/isi-form.blade.php ENDPATH**/ ?>