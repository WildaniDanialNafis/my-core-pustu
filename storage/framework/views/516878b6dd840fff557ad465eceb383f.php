<?php $__env->startSection('title', 'Rujukan Ibu Hamil'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1"><u>SURAT RUJUKAN IBU HAMIL</u></h3>
            <div class="border-top border-dark mt-2 mx-auto" style="width: 250px;"></div>
            <p class="mb-0 mt-2">No. Rujukan: <?php echo e($no_rujukan ?? 'NOMOR RUJUKAN'); ?></p>
        </div>

        <!-- Data Ibu -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA IBU</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Ibu</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2"><?php echo e($ibu->nama ?? '.........................'); ?></div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Umur</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($ibu->tgl_lahir ? now()->diffInYears($ibu->tgl_lahir) . ' Tahun' : '.........................'); ?>

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
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Suami</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e(optional($suami)->nama ?? '-'); ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Diagnosa</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($diagnosa ?? 'Kehamilan'); ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- Alasan Rujukan -->
        <div class="border border-dark p-3 mb-4 rounded" style="min-height: 120px;">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">ALASAN RUJUKAN</h5>
            <div class="form-control-plaintext mt-2">
                <?php echo e($alasan_rujukan ?? '...............................................................................................................'); ?>

            </div>
        </div>

        <!-- Tanda Tangan - Fixed Side by Side Layout -->
        <div class="signature-container"
            style="display: flex !important; justify-content: space-between !important; align-items: flex-end; margin-top: 3rem; page-break-inside: avoid;">
            <!-- Petugas -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 1.5rem; font-size: 12pt;">Petugas KIA</p>
                <div style="border-top: 1px solid #000; width: 200px; margin: 0 auto 0.5rem;"></div>
                <p style="font-weight: bold; margin-bottom: 0; font-size: 12pt;">
                    (.......................................)</p>
            </div>

            <!-- Penerima Rujukan -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 0.5rem; font-size: 12pt;"><?php echo e($ibu->kabupaten ?? 'Kota Contoh'); ?>, 
                    <?php echo e(\Carbon\Carbon::parse($tanggal)->isoFormat('D MMMM Y')); ?></p>
                <p style="margin-bottom: 1.5rem; font-size: 12pt;">Dokter/Bidan Penerima</p>
                <div style="border-top: 1px solid #000; width: 200px; margin: 0 auto 0.5rem;"></div>
                <p style="font-weight: bold; margin-bottom: 0; font-size: 12pt;"><?php echo e($petugas ?? 'dr. Nama Petugas'); ?>

                </p>
                <p style="font-size: 11pt; color: #6c757d; margin-bottom: 0;">NIP.
                    <?php echo e($nip_petugas ?? '.........................'); ?></p>
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

        /* Signature section fixes */
        @media print {
            .signature-container {
                display: flex !important;
                flex-direction: row !important;
            }

            .parent-sign,
            .health-worker-sign {
                float: none !important;
                display: block !important;
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


<?php echo $__env->make('layouts.print', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/my-core-pustu/resources/views/kia/print/rujukan_ibu_hamil.blade.php ENDPATH**/ ?>