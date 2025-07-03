<?php $__env->startSection('title', 'Rujukan Ibu Hamil'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-3" style="text-decoration: underline;">SURAT RUJUKAN IBU HAMIL</h3>
            <p class="mb-0">No. Rujukan: RUJ/2023/07/001</p>
        </div>

        <!-- Data Ibu -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">DATA IBU</h5>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Ibu</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">Siti Nurhaliza</div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Umur</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        28 Tahun
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Alamat</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Jl. Melati No. 15, RT 02/RW 05, Kelurahan Sumberjo, Kecamatan Kartoharjo, Kota Madiun
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-form-label fw-semibold">Nama Suami</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Ahmad Dhani
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Diagnosa</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        Hipertensi dalam Kehamilan
                    </div>
                </div>
            </div>
        </div>

        <!-- Alasan Rujukan -->
        <div class="border border-dark p-3 mb-4 rounded" style="min-height: 120px;">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block">ALASAN RUJUKAN</h5>
            <div class="form-control-plaintext mt-2">
                Ibu hamil dengan tekanan darah tinggi (160/100 mmHg) yang tidak terkontrol dengan pengobatan oral. 
                Diperlukan penanganan lebih lanjut di fasilitas kesehatan yang lebih lengkap untuk pemantauan ketat 
                dan penanganan kemungkinan pre-eklampsia. Ibu juga menunjukkan gejala sakit kepala hebat dan penglihatan kabur.
            </div>
        </div>

        <!-- Tanda Tangan Section - Perfectly Centered -->
        <div class="row mt-5" style="page-break-inside: avoid;">
            <!-- Petugas Column -->
            <div class="col-6">
                <div class="d-flex flex-column align-items-center justify-content-end" style="height: 180px;">
                    <div class="signature-placeholder mb-3" style="width: 200px; height: 80px; position: relative;">
                        <?php if(file_exists(public_path('signature.png'))): ?>
                            <img src="<?php echo e(asset('signature.png')); ?>" alt="Tanda Tangan Petugas" 
                                style="max-height: 100%; max-width: 100%; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);">
                        <?php else: ?>
                            <div style="border-bottom: 1px dashed #000; width: 100%; position: absolute; bottom: 0;"></div>
                        <?php endif; ?>
                    </div>
                    <div class="text-center">
                        <p class="mb-1" style="font-size: 12pt;">Petugas KIA</p>
                        <p class="fw-bold mb-0" style="font-size: 12pt;">dr. Maya Indah Sari</p>
                        <p class="text-muted mb-0" style="font-size: 11pt;">NIP. 198507102010122001</p>
                    </div>
                </div>
            </div>

            <!-- Penerima Column -->
            <div class="col-6">
                <div class="d-flex flex-column align-items-center justify-content-end" style="height: 180px;">
                    <p class="mb-3" style="font-size: 12pt;">Madiun, 15 Juli 2023</p>
                    <div class="signature-placeholder mb-3" style="width: 200px; height: 80px; position: relative;">
                        <?php if(file_exists(public_path('signature-1.png'))): ?>
                            <img src="<?php echo e(asset('signature-1.png')); ?>" alt="Tanda Tangan Penerima" 
                                style="max-height: 100%; max-width: 100%; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);">
                        <?php else: ?>
                            <div style="border-bottom: 1px dashed #000; width: 100%; position: absolute; bottom: 0;"></div>
                        <?php endif; ?>
                    </div>
                    <div class="text-center">
                        <p class="mb-1" style="font-size: 12pt;">Dokter/Bidan Penerima</p>
                        <p class="fw-bold mb-0" style="font-size: 12pt;">dr. Rina Wulandari</p>
                        <p class="text-muted mb-0" style="font-size: 11pt;">NIP. 198012312003122001</p>
                    </div>
                </div>
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

        .border-dark {
            border-color: #000 !important;
        }

        .rounded {
            border-radius: 0.25rem !important;
        }

        /* Signature Section Styling */
        .signature-placeholder {
            border-bottom: 1px dashed #000;
        }

        @media print {
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
                padding: 0;
                margin: 0;
            }
            
            .container-fluid {
                padding: 0 15px;
            }
            
            /* Ensure no page breaks in signature section */
            .row {
                page-break-inside: avoid;
                break-inside: avoid;
                display: flex !important;
            }
            
            .col-md-6 {
                width: 50%;
                float: none;
                display: flex;
                flex-direction: column;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.print', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/my-core-pustu/resources/views/kia/print/rujukan_ibu_hamil.blade.php ENDPATH**/ ?>