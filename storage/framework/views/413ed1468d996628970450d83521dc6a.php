<?php $__env->startSection('title', 'Formulir Rujukan Bayi'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1"><u>FORMULIR RUJUKAN BAYI</u></h3>
            <div class="border-top border-dark mt-2 mx-auto" style="width: 250px;"></div>
            <p class="fw-semibold">No: <?php echo e($no_rujukan ?? '.........................'); ?></p>
        </div>

        <!-- Data Bayi -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA BAYI</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Bayi</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($bayi->nama ?? '.........................'); ?>

                    </div>
                </div>
                <div class="col-sm-3 col-form-label fw-semibold">Tanggal Lahir</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($bayi->tgl_lahir ? \Carbon\Carbon::parse($bayi->tgl_lahir)->isoFormat('D MMMM Y') : '.........................'); ?>

                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Umur</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($bayi->tgl_lahir ? now()->diffInDays($bayi->tgl_lahir).' Hari' : '......'); ?>

                    </div>
                </div>
                <div class="col-sm-3 col-form-label fw-semibold">Berat Lahir</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($bayi->berat_lahir ? $bayi->berat_lahir.' gram' : '......'); ?>

                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Jenis Kelamin</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($bayi->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'); ?>

                    </div>
                </div>
                <div class="col-sm-3 col-form-label fw-semibold">Panjang Badan</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($bayi->panjang_badan ? $bayi->panjang_badan.' cm' : '......'); ?>

                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Ibu</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($ibu->nama ?? '.........................'); ?>

                    </div>
                </div>
                <div class="col-sm-3 col-form-label fw-semibold">Nama Ayah</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($suami ?? '.........................'); ?>

                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Alamat</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($ibu->alamat ?? '...............................................................................................................'); ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">No. Telp/HP</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($ibu->telepon ?? '.........................'); ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- Form Rujukan -->
        <div class="border border-dark p-3 mb-4 rounded" style="min-height: 250px;">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">FORM RUJUKAN</h5>
            <div class="row mb-3">
                <div class="col-sm-4 col-form-label fw-semibold">DIAGNOSIS SEMENTARA:</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($rujukan->diagnosis_sementara ?? '...............................................................................................................'); ?>

                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 col-form-label fw-semibold">ALASAN RUJUKAN:</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($rujukan->sebab_dirujuk ?? '...............................................................................................................'); ?>

                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 col-form-label fw-semibold">TINDAKAN YANG TELAH DIBERIKAN:</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($rujukan->tindakan_sementara ?? '...............................................................................................................'); ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-form-label fw-semibold">DIRUJUK KE:</div>
                <div class="col-sm-8">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e($rujukan->dirujuk_ke ?? '...............................................................................................................'); ?>

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
                    <?php echo e(\Carbon\Carbon::parse($tanggal)->isoFormat('D MMMM Y') ?? \Carbon\Carbon::now()->isoFormat('D MMMM Y')); ?></p>
            </div>
    
            <!-- Petugas -->
            <div class="text-center" style="width: 48%;">
                <p style="margin-bottom: 1.5rem; font-size: 12pt;">Petugas KIA</p>
                <div style="border-top: 1px solid #000; width: 200px; margin: 0 auto 0.5rem;"></div>
                <p style="font-weight: bold; margin-bottom: 0; font-size: 12pt;"><?php echo e($petugas ?? 'Nama Petugas'); ?></p>
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
            line-height: 1.5;
        }

        .kop {
            font-family: Arial, sans-serif;
        }

        .form-control-plaintext {
            min-height: 1.5em;
        }

        .border-dark {
            border-color: #000 !important;
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
                padding: 10px;
                margin: 0;
            }
        }

        /* Prevent unwanted breaks */
        .no-break {
            page-break-inside: avoid;
            break-inside: avoid;
        }
    </style>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.print', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/my-core-pustu/resources/views/kia/print/rujukan_bayi.blade.php ENDPATH**/ ?>