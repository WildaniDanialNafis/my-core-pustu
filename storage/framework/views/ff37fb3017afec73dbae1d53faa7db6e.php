<?php $__env->startSection('title', 'Surat Rujukan KIA'); ?>

<?php $__env->startSection('header'); ?>
    <div class="kop">
        <h5>PEMERINTAH KABUPATEN CONTOH</h5>
        <h6>DINAS KESEHATAN DUMMY</h6>
        <h6>PUSKESMAS MELATI INDAH</h6>
        <p><em>Jl. Kesehatan No. 123, Kelurahan Sehat, Kecamatan Bahagia</em></p>
        <hr>
        <h5 class="title">SURAT RUJUKAN KIA</h5>
        <p>No. Rujukan: RUJ/2023/07/001</p>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Data Pasien -->
    <table class="data-table">
        <tr>
            <td width="50%"><span class="data-label">No. RM:</span><span class="data-value">RM202307001</span></td>
            <td width="50%"><span class="data-label">Nama:</span><span class="data-value">Siti Nurhaliza</span></td>
        </tr>
        <tr>
            <td><span class="data-label">Umur:</span><span class="data-value">28 Tahun</span></td>
            <td><span class="data-label">Alamat:</span><span class="data-value">Jl. Mawar No. 45, Kelurahan Sejahtera</span></td>
        </tr>
        <tr>
            <td><span class="data-label">Nama Suami:</span><span class="data-value">Ahmad Dhani</span></td>
            <td><span class="data-label">Diagnosa:</span><span class="data-value">Kehamilan risiko tinggi</span></td>
        </tr>
    </table>

    <!-- Keadaan Umum -->
    <div class="section-title">Keadaan Umum</div>
    <table class="data-table">
        <tr>
            <td width="50%"><span class="data-label">Keadaan Umum:</span><span class="data-value">Sedang</span></td>
            <td width="50%"><span class="data-label">Kesadaran:</span><span class="data-value">Compos mentis</span></td>
        </tr>
    </table>

    <!-- Vital Sign -->
    <div class="section-title">Vital Sign</div>
    <table class="data-table">
        <tr>
            <td width="25%"><span class="data-label">TD:</span><span class="data-value">120/80 mmHg</span></td>
            <td width="25%"><span class="data-label">Nadi:</span><span class="data-value">88x/menit</span></td>
            <td width="25%"><span class="data-label">RR:</span><span class="data-value">20x/menit</span></td>
            <td width="25%"><span class="data-label">Suhu:</span><span class="data-value">36.5°C</span></td>
        </tr>
    </table>

    <!-- Pemeriksaan Kebidanan -->
    <div class="section-title">Pemeriksaan</div>
    <div style="margin-bottom: 15px;">
        <div class="data-label">Pemeriksaan Kebidanan:</div>
        <div style="padding-left: 20px; margin-top: 5px;">
            <ul class="medical-list">
                <li>Fundus uteri 3 jari bawah pusat</li>
                <li>TFU 28 cm</li>
                <li>Letak kepala</li>
                <li>DJJ (+) 140x/menit</li>
                <li>His (-), Portio belum terbuka, ketuban utuh</li>
            </ul>
        </div>
    </div>

    <div style="margin-bottom: 15px;">
        <div class="data-label">Terapi yang Diberikan:</div>
        <div style="padding-left: 20px; margin-top: 5px;">
            - Injeksi Fe 1 ampul<br>
            - Tablet Fe 1x1<br>
            - Vitamin B kompleks
        </div>
    </div>

    <div style="margin-bottom: 15px;">
        <div class="data-label">Alasan Rujukan:</div>
        <div class="text-justify" style="padding-left: 20px; margin-top: 5px;">
            Ibu hamil dengan usia kehamilan 28 minggu, ditemukan tekanan darah cenderung tinggi (140/90 mmHg pada pengukuran sebelumnya), perlu evaluasi lebih lanjut untuk kemungkinan pre-eklampsia dan penanganan oleh dokter spesialis kandungan.
        </div>
    </div>

    <!-- Petugas -->
    <div class="section-title">Petugas</div>
    <table class="data-table">
        <tr>
            <td width="50%"><span class="data-label">Yang Merujuk:</span><span class="data-value">dr. Maya Indah Sari</span></td>
            <td width="50%"><span class="data-label">Yang Menerima Rujukan:</span><span class="data-value">dr. Sp.OG Budi Santoso</span></td>
        </tr>
        <tr>
            <td colspan="2"><span class="data-label">NIP:</span><span class="data-value">198507102010012001</span></td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <div style="margin-top: 50px;">
        <table class="data-table">
            <tr>
                <td width="50%" style="text-align: center;">
                    <div class="signature-area">
                        <div>(dr. Maya Indah Sari)</div>
                        <div>NIP. 198507102010012001</div>
                    </div>
                </td>
                <td width="50%" style="text-align: center;">
                    <div class="signature-area">
                        <div>(dr. Sp.OG Budi Santoso)</div>
                        <div>Dokter Penanggung Jawab</div>
                    </div>
                </td>
            </tr>
        </table>

        <div style="text-align: center; margin-top: 50px;">
            <p>Tembusan:<br>
                1. Arsip<br>
                2. Rekam Medis Pasien</p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.print', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/my-core-pustu/resources/views/surat/rujukan_kia.blade.php ENDPATH**/ ?>