<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Dokumen Kesehatan'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Base Styles */
        body {
            font-family: 'Times New Roman', Times, serif;
            line-height: 1.5;
            color: #000;
            background-color: #fff;
        }

        /* Print Specific Styles */
        @page {
            size: A4;
            margin: 1.5cm;

            @top-center {
                content: element(page-header);
            }

            @bottom-center {
                content: element(page-footer);
            }
        }

        @media print {
            body {
                font-size: 11pt;
                padding: 0;
                margin: 0;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .container {
                width: 100% !important;
                max-width: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
            }

            .no-print,
            .btn {
                display: none !important;
            }

            .page-break {
                page-break-after: always;
            }

            .avoid-break {
                page-break-inside: avoid;
            }
        }

        /* Screen Specific Styles */
        @media screen {
            .container {
                max-width: 21cm;
                margin: 20px auto;
                padding: 1.5cm;
                background: white;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                border: 1px solid #ddd;
            }
        }

        /* Header Styles */
        .kop {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .kop img {
            max-height: 80px;
        }

        .kop h1 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.2rem;
            line-height: 1.2;
        }

        .kop h2 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.2rem;
        }

        .kop p {
            font-size: 0.9rem;
            margin-bottom: 0.3rem;
        }

        .header-line {
            border-top: 3px solid #000;
            border-bottom: 1px solid #000;
            margin: 0.5rem 0;
        }

        /* Form Elements */
        .form-label {
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        .section-title {
            font-weight: 700;
            font-size: 1.1rem;
            margin: 1.5rem 0 1rem 0;
            border-bottom: 2px solid #000;
            padding-bottom: 0.3rem;
        }

        .subsection-title {
            font-weight: 600;
            font-size: 1rem;
            margin: 1rem 0 0.5rem 0;
            border-bottom: 1px dashed #000;
            padding-bottom: 0.2rem;
        }

        /* Data Display */
        .data-row {
            margin-bottom: 0.7rem;
        }

        .data-label {
            font-weight: 600;
            padding-right: 0.5rem;
            white-space: nowrap;
        }

        .data-value {
            border-bottom: 1px solid #ccc;
            min-height: 1.5em;
            padding: 0 0.3rem;
            flex-grow: 1;
        }

        /* Tables */
        .form-table {
            width: 100%;
            border-collapse: collapse;
            margin: 0.8rem 0;
        }

        .form-table th,
        .form-table td {
            border: 1px solid #000;
            padding: 0.5rem;
            vertical-align: top;
        }

        .form-table th {
            background-color: #f8f9fa;
            font-weight: 600;
            text-align: center;
        }

        /* Signature Areas */
        .signature-area {
            margin-top: 3rem;
        }

        .signature-box {
            display: inline-block;
            width: 45%;
            vertical-align: top;
        }

        .signature-line {
            width: 70%;
            border-top: 1px solid #000;
            margin: 4rem auto 0.5rem auto;
            text-align: center;
        }

        /* Utility Classes */
        .text-underline {
            text-decoration: underline;
        }

        .text-bold {
            font-weight: 700;
        }

        .text-italic {
            font-style: italic;
        }

        .text-small {
            font-size: 0.85rem;
        }

        .text-center {
            text-align: center;
        }

        .mt-1 {
            margin-top: 0.25rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mt-3 {
            margin-top: 1rem;
        }

        .mt-4 {
            margin-top: 1.5rem;
        }

        .mt-5 {
            margin-top: 3rem;
        }

        /* Watermark (optional) */
        .watermark {
            position: fixed;
            opacity: 0.1;
            font-size: 8cm;
            width: 100%;
            text-align: center;
            z-index: -1;
            top: 50%;
            left: 0;
            transform: rotate(-45deg);
            transform-origin: center center;
        }
    </style>
</head>

<body>
    <!-- Watermark (optional) -->
    <div class="watermark no-print"><?php echo e(config('app.name', 'PUSKESMAS')); ?></div>

    <div class="container">
        <!-- Document Header -->
        <header class="kop">
            <table width="100%" class="mb-2 align-middle">
                <tr>
                    <!-- Logo Kiri -->
                    <td width="20%" class="text-start align-top">
                        
                    </td>

                    <!-- Teks Tengah -->
                    <td class="text-center">
                        <h1 class="text-uppercase" style="margin-bottom: 4px;">PEMERINTAH KABUPATEN
                            <?php echo e($kabupaten ?? 'CONTOH'); ?></h1>
                        <h2 class="text-uppercase" style="margin-bottom: 4px;">DINAS KESEHATAN</h2>
                        <h2 class="text-uppercase" style="margin-bottom: 4px;">
                            <?php echo e($nama_puskesmas ?? 'PUSKESMAS CONTOH'); ?></h2>
                        <p class="mb-0"><small><?php echo e($alamat_puskesmas ?? 'Jl. Contoh No. 123, Kec. Contoh'); ?></small>
                        </p>
                        <p class="mb-0"><small>Telp: <?php echo e($telepon_puskesmas ?? '(021) 12345678'); ?> | Email:
                                <?php echo e($email_puskesmas ?? 'puskesmas@example.com'); ?></small></p>
                    </td>

                    <!-- Logo Kanan -->
                    <td width="20%" class="text-end align-top">
                        
                    </td>
                </tr>
            </table>
            <div class="header-line" style="border-top: 3px solid black; margin-top: 10px;"></div>
        </header>

        <!-- Document Content -->
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <!-- Document Footer -->
        <footer class="footer no-print">
            <div class="text-center text-small text-muted mt-4">
                <p>Dokumen ini dicetak secara elektronik dan tidak memerlukan tanda tangan basah</p>
                <p>Dicetak pada: <?php echo e(\Carbon\Carbon::now()->isoFormat('D MMMM Y HH:mm:ss')); ?></p>
            </div>
        </footer>
    </div>

    <!-- Print Button (visible only on screen) -->
    <div class="no-print text-center fixed-bottom mb-4">
        <button onclick="window.print()" class="btn btn-primary btn-lg px-4 py-2">
            <i class="bi bi-printer-fill"></i> Cetak Dokumen
        </button>
    </div>

    <?php echo $__env->yieldContent('scripts'); ?>

    <!-- Default Print Script -->
    
</body>

</html>
<?php /**PATH /var/www/my-core-pustu/resources/views/layouts/print.blade.php ENDPATH**/ ?>