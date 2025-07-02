<?php $__env->startSection('title', 'Skrining Preeklampsia'); ?>

<?php $__env->startSection('header'); ?>
    <div class="kop text-center">
        <h1 class="h5 mb-1">PEMERINTAH KABUPATEN CONTOH</h1>
        <h2 class="h6 mb-1">DINAS KESEHATAN DUMMY</h2>
        <h2 class="h6 mb-1"><?php echo e($nama_puskesmas ?? 'NAMA PUSKESMAS'); ?></h2>
        <p><em><?php echo e($alamat_puskesmas ?? 'ALAMAT PUSKESMAS'); ?></em></p>
        <hr>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1"><u>FORMULIR SKRINING PREEKLAMPSIA</u></h3>
            <div class="border-top border-dark mt-2 mx-auto" style="width: 250px;"></div>
        </div>

        <!-- Data Ibu -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA IBU</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Ibu</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($ibu->nama ?? '.........................'); ?>

                    </div>
                </div>
                <div class="col-sm-2 col-form-label fw-semibold">Umur</div>
                <div class="col-sm-4">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e(now()->diffInYears($ibu->tgl_lahir) ?? '......'); ?> Tahun
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Alamat</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($ibu->alamat ?? '.........................'); ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal Pemeriksaan</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($skrining->created_at ? \Carbon\Carbon::parse($skrining->created_at)->isoFormat('D MMMM Y') : \Carbon\Carbon::now()->isoFormat('D MMMM Y')); ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- Hasil Skrining -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">HASIL SKRINING</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center fw-semibold">Parameter</th>
                        <th class="text-center fw-semibold">Hasil</th>
                        <th class="text-center fw-semibold">Normal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tekanan Darah</td>
                        <td><?php echo e(optional($skrining)->tekanan_darah ?? '.........................'); ?></td>
                        <td>< 140/90 mmHg</td>
                    </tr>
                    <tr>
                        <td>Protein Urin</td>
                        <td><?php echo e(optional($skrining)->protein_urin ?? '.........................'); ?></td>
                        <td>Negatif</td>
                    </tr>
                    <tr>
                        <td>Edema</td>
                        <td><?php echo e(optional($skrining)->edema ?? '.........................'); ?></td>
                        <td>Tidak Ada</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Hasil dan Rekomendasi -->
        <div class="border border-dark p-3 mb-4 rounded">
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label fw-semibold">Hasil Skrining</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2 fw-bold">
                        <?php echo e(optional($skrining)->hasil ?? '.........................'); ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Rekomendasi</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e(optional($skrining)->rekomendasi ?? '...............................................................................................................'); ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- Tanda Tangan -->
        <div class="signature-container"
            style="display: flex !important; justify-content: space-between !important; align-items: flex-end; margin-top: 3rem; page-break-inside: avoid;">
            <!-- Tanggal -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 0.5rem; font-size: 12pt;"><?php echo e($ibu->kabupaten ?? 'Kota Contoh'); ?>, 
                    <?php echo e(\Carbon\Carbon::now()->isoFormat('D MMMM Y')); ?></p>
            </div>
            
            <!-- Petugas -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 1.5rem; font-size: 12pt;">Petugas Kesehatan</p>
                <div style="border-top: 1px solid #000; width: 200px; margin: 0 auto 0.5rem;"></div>
                <p style="font-weight: bold; margin-bottom: 0; font-size: 12pt;"><?php echo e($petugas ?? 'dr. Nama Petugas'); ?></p>
                <p style="font-size: 11pt; color: #6c757d; margin-bottom: 0;">NIP. <?php echo e($nip_petugas ?? '.........................'); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        @page {
            size: A4;
            margin: 20mm;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
        }

        .kop {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        /* Signature section fixes */
        @media print {
            .signature-container {
                display: flex !important;
                flex-direction: row !important;
            }

            /* Chrome specific fix */
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }

        /* Prevent unwanted breaks */
        .no-break {
            page-break-inside: avoid;
            break-inside: avoid;
        }

        .form-control-plaintext {
            min-height: 1.5em;
        }
    </style>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.print', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/my-core-pustu/resources/views/kia/print/skrining_preeklampsia.blade.php ENDPATH**/ ?>