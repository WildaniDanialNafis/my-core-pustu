<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title ?? 'Laporan PUSTU'); ?></title>
    
    
    <style>
        /* Reset CSS untuk Print */
        @page {
            size: A4;
            margin: 15mm 15mm 15mm 15mm;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            font-size: 12pt;
            line-height: 1.5;
            color: #333;
        }
        
        /* Layout Dokumen */
        .document-container {
            width: 100%;
            max-width: 210mm;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Kop Surat */
        .letterhead {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 3px solid #333;
            padding-bottom: 10px;
        }
        
        .letterhead-logo {
            width: 70px;
            height: auto;
            margin-right: 15px;
        }
        
        .letterhead-text {
            flex-grow: 1;
            text-align: center;
        }
        
        .letterhead-title {
            font-size: 14pt;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .letterhead-subtitle {
            font-size: 12pt;
            margin-bottom: 3px;
        }
        
        .letterhead-address {
            font-size: 10pt;
            font-style: italic;
        }
        
        /* Judul Laporan */
        .report-title {
            text-align: center;
            margin: 20px 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #333;
        }
        
        .report-title-main {
            font-size: 16pt;
            font-weight: bold;
        }
        
        .report-title-sub {
            font-size: 12pt;
        }
        
        /* Informasi Laporan */
        .report-info {
            margin-bottom: 20px;
            font-size: 11pt;
        }
        
        .report-info-item {
            margin-bottom: 5px;
        }
        
        /* Tabel Data */
        .report-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
            font-size: 10pt;
        }
        
        .report-table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
            padding: 8px;
            border: 1px solid #ddd;
        }
        
        .report-table td {
            padding: 6px;
            border: 1px solid #ddd;
        }
        
        .text-center {
            text-align: center;
        }
        
        .text-right {
            text-align: right;
        }
        
        .text-bold {
            font-weight: bold;
        }
        
        /* Bagian Tanda Tangan */
        .signature-section {
            margin-top: 30px;
            display: flex;
            justify-content: flex-end;
        }
        
        .signature-block {
            width: 250px;
            text-align: center;
        }
        
        .signature-placeholder {
            height: 80px;
            margin: 20px 0 5px;
        }
        
        /* Print Specific Styles */
        @media print {
            .no-print {
                display: none;
            }
            
            body {
                font-size: 10pt;
            }
            
            .document-container {
                padding: 0;
            }
        }
    </style>
    
    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <div class="document-container">
        
        <div class="letterhead">
            <img src="<?php echo e(asset('images/logo-puskesmas.png')); ?>" alt="Logo PUSTU" class="letterhead-logo">
            <div class="letterhead-text">
                <div class="letterhead-title">PUSKESMAS PEMBANTU (PUSTU)</div>
                <div class="letterhead-subtitle">DINAS KESEHATAN KABUPATEN/KOTA</div>
                <div class="letterhead-subtitle"><?php echo e($puskesmas->nama ?? 'NAMA PUSKESMAS INDUK'); ?></div>
                <div class="letterhead-address"><?php echo e($puskesmas->alamat ?? 'Alamat Pustu'); ?> | Telp: <?php echo e($puskesmas->telepon ?? '-'); ?></div>
            </div>
        </div>
        
        
        <div class="report-title">
            <div class="report-title-main">
                <?php echo $__env->yieldContent('title', 'Laporan Kegiatan PUSTU'); ?>
            </div>
            <div class="report-title-sub">
                <?php echo $__env->yieldContent('subtitle', 'Bulanan/Tahunan'); ?>
            </div>
        </div>
        
        
        <div class="report-info">
            <?php if (! empty(trim($__env->yieldContent('report-info')))): ?>
                <?php echo $__env->yieldContent('report-info'); ?>
            <?php else: ?>
                <div class="report-info-item"><strong>Periode:</strong> <?php echo e(date('F Y')); ?></div>
                <div class="report-info-item"><strong>Lokasi PUSTU:</strong> <?php echo e($pustu->lokasi ?? 'Lokasi PUSTU'); ?></div>
                <div class="report-info-item"><strong>Penanggung Jawab:</strong> <?php echo e($pustu->penanggung_jawab ?? 'Nama Penanggung Jawab'); ?></div>
            <?php endif; ?>
        </div>
        
        
        <div class="report-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        
        
        <div class="signature-section">
            <div class="signature-block">
                <div class="letterhead-address"><?php echo e($pustu->lokasi ?? 'Lokasi PUSTU'); ?>, <?php echo e(date('d F Y')); ?></div>
                <div class="signature-placeholder"></div>
                <div class="text-bold"><?php echo e($pustu->penanggung_jawab ?? 'Nama Penanggung Jawab'); ?></div>
                <div>NIP. <?php echo e($pustu->nip ?? 'NIP'); ?></div>
            </div>
        </div>
    </div>
    
    
    <div class="no-print" style="position: fixed; bottom: 20px; right: 20px;">
        <button onclick="window.print()" style="padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Cetak Laporan
        </button>
    </div>
    
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH /var/www/my-core-pustu/resources/views/admin/layouts2/form.blade.php ENDPATH**/ ?>