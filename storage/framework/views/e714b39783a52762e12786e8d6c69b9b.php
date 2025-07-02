<?php $__env->startSection('title', 'Pemantauan ANC Trimester 3'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid px-4">
        <!-- Header Section -->
        <div class="text-center my-4">
            <h3 class="fw-bold mb-1"><u>PEMANTAUAN ANC TRIMESTER 3 (28-40 MINGGU)</u></h3>
            <div class="border-top border-dark mt-2 mx-auto" style="width: 250px;"></div>
            <p class="fw-semibold">No. Registrasi: <?php echo e($ibu->no_reg_kohort_ibu ?? '.........................'); ?></p>
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
                <div class="col-sm-3 col-form-label fw-semibold">HPHT</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e(optional($pemeriksaan)->hpht ? \Carbon\Carbon::parse($pemeriksaan->hpht)->isoFormat('D MMMM Y') : '.........................'); ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Usia Kehamilan</div>
                <div class="col-sm-3">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e(optional($pemeriksaan)->usia_kehamilan ?? '......'); ?> minggu
                    </div>
                </div>
                <div class="col-sm-2 col-form-label fw-semibold">Tanggal Pemeriksaan</div>
                <div class="col-sm-4">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e(\Carbon\Carbon::parse($tanggal)->isoFormat('D MMMM Y') ?? '.........................'); ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- Pemeriksaan Fisik -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">PEMERIKSAAN FISIK</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Berat Badan</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($fisik)->berat_badan ?? '......'); ?> kg
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Tinggi Fundus</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($fisik)->tinggi_fundus ?? '......'); ?> cm
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Tekanan Darah</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($fisik)->tekanan_darah ?? '......'); ?> mmHg
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Denyut Jantung Janin</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($fisik)->denyut_jantung_janin ?? '......'); ?> /menit
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Lingkar Lengan</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($fisik)->lingkar_lengan ?? '......'); ?> cm
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Presentasi Janin</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($fisik)->presentasi_janin ?? '.........................'); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pemeriksaan USG -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">PEMERIKSAAN USG</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">Tanggal USG</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($usg)->tanggal ? \Carbon\Carbon::parse($usg->tanggal)->isoFormat('D MMMM Y') : '.........................'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">Taksiran Berat Janin</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($usg)->taksiran_berat_janin ?? '......'); ?> gram
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">Liquor Amnion</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($usg)->liquor_amnion ?? '.........................'); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row mb-2">
                        <div class="col-sm-5 col-form-label fw-semibold">Plasenta</div>
                        <div class="col-sm-7">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($usg)->plasenta ?? '.........................'); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skrining Pre-Eklampsia -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">SKRINING PRE-EKLAMPSIA</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Tekanan Darah</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($skrining)->tekanan_darah ?? '......'); ?> mmHg
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Protein Urin</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($skrining)->protein_urin ?? '.........................'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Refleks Patella</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($skrining)->refleks_patella ?? '.........................'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                        <div class="col-sm-6 col-form-label fw-semibold">Edema</div>
                        <div class="col-sm-6">
                            <div class="form-control-plaintext border-bottom border-dark ps-2">
                                <?php echo e(optional($skrining)->edema ?? '.........................'); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Keluhan</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e(optional($skrining)->keluhan ?? '...............................................................................................................'); ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- Rencana Persalinan -->
        <div class="border border-dark p-3 mb-4 rounded">
            <h5 class="fw-bold border-bottom border-dark pb-1 d-inline-block text-center">RENCANA PERSALINAN</h5>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label fw-semibold">Tempat Rencana Bersalin</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e(optional($pemeriksaan)->tempat_rencana_persalinan ?? '...............................................................................................................'); ?>

                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 col-form-label fw-semibold">Pendamping Persalinan</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e(optional($pemeriksaan)->pendamping_persalinan ?? '...............................................................................................................'); ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-form-label fw-semibold">Kesiapan Transportasi</div>
                <div class="col-sm-9">
                    <div class="form-control-plaintext border-bottom border-dark ps-2">
                        <?php echo e(optional($pemeriksaan)->transportasi ?? '...............................................................................................................'); ?>

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


<?php echo $__env->make('layouts.print', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/my-core-pustu/resources/views/kia/print/anc_trimester3.blade.php ENDPATH**/ ?>