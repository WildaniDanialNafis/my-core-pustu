<?php

use App\Http\Controllers\AmanatDarahController;
use App\Http\Controllers\AmanatKendaraanController;
use App\Http\Controllers\AmanatPenolongPersalinanController;
use App\Http\Controllers\AnakBalitaController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\BayiBaruLahirController;
use App\Http\Controllers\BayiController;
use App\Http\Controllers\BayiLahirController;
use App\Http\Controllers\BbTbLakiController;
use App\Http\Controllers\BbTbPerempuanController;
use App\Http\Controllers\BbULakiController;
use App\Http\Controllers\BbUPerempuanController;
use App\Http\Controllers\BeratBadanBumilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKesehatanGigiController;
use App\Http\Controllers\DataKmsLakiController;
use App\Http\Controllers\DataKmsPerempuanController;
use App\Http\Controllers\EvaluasiKehamilanController;
use App\Http\Controllers\EvaluasiKesehatanBumilController;
use App\Http\Controllers\Ibu2Controller;
use App\Http\Controllers\IbuBersalinController;
use App\Http\Controllers\IbuController;
use App\Http\Controllers\IdentitasAnakController;
use App\Http\Controllers\ImtLakiController;
use App\Http\Controllers\ImtPerempuanController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\ImunisasiTController;
use App\Http\Controllers\KapsulAnakController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\Kesehatan1Controller;
use App\Http\Controllers\Kesehatan2Controller;
use App\Http\Controllers\KesehatanBersalinController;
use App\Http\Controllers\KesehatanGigiController;
use App\Http\Controllers\KesehatanNifasController;
use App\Http\Controllers\KeteranganLahirController;
use App\Http\Controllers\KmsLakiController;
use App\Http\Controllers\KmsPerempuanController;
use App\Http\Controllers\KN0Controller;
use App\Http\Controllers\KN1Controller;
use App\Http\Controllers\KN2Controller;
use App\Http\Controllers\KN3Controller;
use App\Http\Controllers\KondisiKesehatanBumilController;
use App\Http\Controllers\KontrolTtdController;
use App\Http\Controllers\LingkarKepalaLakiController;
use App\Http\Controllers\LingkarKepalaPerempuanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenyambutPersalinanController;
use App\Http\Controllers\MinumTtdController;
use App\Http\Controllers\NasihatAnakController;
use App\Http\Controllers\PelayananKesehatanNeonatusController;
use App\Http\Controllers\PelayananSdidtkController;
use App\Http\Controllers\PemantauanKiaController;
use App\Http\Controllers\PemeriksaanFisikTri1Controller;
use App\Http\Controllers\PemeriksaanFisikTri3Controller;
use App\Http\Controllers\PemeriksaanKhususController;
use App\Http\Controllers\PemeriksaanLaboratoriumTri1Controller;
use App\Http\Controllers\PemeriksaanLaboratoriumTri3Controller;
use App\Http\Controllers\PemeriksaanTrimester1Controller;
use App\Http\Controllers\PemeriksaanTrimester3Controller;
use App\Http\Controllers\PenyimpanganEmosionalController;
use App\Http\Controllers\PenyimpanganPerkembanganController;
use App\Http\Controllers\PenyimpanganPertumbuhanController;
use App\Http\Controllers\PreeklampsiaAnamnesisController;
use App\Http\Controllers\PreeklampsiaFisikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RingkasanKesehatanController;
use App\Http\Controllers\RingkasanKesimpulanNifasController;
use App\Http\Controllers\RingkasanMtbsController;
use App\Http\Controllers\RingkasanNifasController;
use App\Http\Controllers\RingkasanPelayananDokterController;
use App\Http\Controllers\RiwayatKehamilanController;
use App\Http\Controllers\RiwayatKelahiranController;
use App\Http\Controllers\RiwayatKesehatanBumilController;
use App\Http\Controllers\RiwayatPenyakitKeluargaController;
use App\Http\Controllers\RiwayatPerilakuBerisikoController;
use App\Http\Controllers\RujukanAnakController;
use App\Http\Controllers\RujukanController;
use App\Http\Controllers\SkriningPreeklampsiaController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\TbULakiController;
use App\Http\Controllers\TbUPerempuanController;
use App\Http\Controllers\UsgTri1Controller;
use App\Http\Controllers\UsgTri3Controller;
use App\Http\Controllers\WaliController;
use App\Models\BbTbLaki;
use App\Models\BbTbPerempuan;
use App\Models\BbULaki;
use App\Models\BbUPerempuan;
use App\Models\Ibu;
use App\Models\ImtLaki;
use App\Models\ImtPerempuan;
use App\Models\Keluarga;
use App\Models\LingkarKepalaLaki;
use App\Models\LingkarKepalaPerempuan;
use App\Models\TbULaki;
use App\Models\TbUPerempuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

Route::get('/dashboard2', function () {
    return view('admin.layouts2.main');
});

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('admin.layouts2.template-table');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/coba-dashboard', [DashboardController::class, 'create'])->name('dashboard.create');

// Route::get('/coba-login', [LoginController::class, 'create'])->name('login.create');
// Route::post('/coba-login', [LoginController::class, 'store'])->name('login.store');

Route::get('/coba-register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/coba-register', [RegisterController::class, 'store'])->name('register.store');

Route::get('coba-buttons', function () {
    return  view('admin.pages.buttons');
});

Route::get('coba-cards', function () {
    return  view('admin.pages.cards');
});

Route::get('coba-colors', function () {
    return  view('admin.pages.colors');
});

Route::get('coba-borders', function () {
    return  view('admin.pages.borders');
});

Route::get('coba-animations', function () {
    return  view('admin.pages.animations');
});

Route::get('coba-other', function () {
    return  view('admin.pages.other');
});

Route::get('coba-forgot-password', function () {
    return  view('admin.pages.forgot-password');
});

Route::get('coba-404', function () {
    return  view('admin.pages.404');
});

Route::get('coba-blank', function () {
    return  view('admin.pages.blank');
});

Route::get('coba-charts', function () {
    return  view('admin.pages.charts');
});

// Route::get('/create-wildani', function () {
//     $email = 'wildani@gmail.com';

//     // Cek apakah user sudah ada
//     $existingUser = DB::table('users')->where('email', $email)->first();

//     if ($existingUser) {
//         return 'User already exists.';
//     }

//     // Tambahkan user baru
//     DB::table('users')->insert([
//         'name' => 'Wildani',
//         'email' => $email,
//         'password' => Hash::make('Tuhiu2003'),
//         'id_role' => 1, // Sesuai default yang disebutkan di struktur tabel
//         'created_at' => Carbon::now(),
//         'updated_at' => Carbon::now(),
//     ]);

//     return 'User created successfully.';
// });

Route::post('/coba-tables', [TablesController::class, 'create'])->name('tables.create');
Route::post('/coba-tables', [TablesController::class, 'store'])->name('tables.store');
Route::get('/coba-tables/edit/{id}', [TablesController::class, 'edit'])->name('tables.edit');
Route::put('/coba-tables/update/{id}', [TablesController::class, 'update'])->name('tables.update');
Route::delete('/coba-tables/delete/{id}', [TablesController::class, 'destroy'])->name('tables.delete');
Route::post('/users/data', [TablesController::class, 'getUsers'])->name('users.data');

Route::post('/ajax', function (Request $request) {
    return view('admin.layouts2.ajax', [
        'table' => $request->input('table'),
    ]);
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Route untuk semua endpoint AJAX
    Route::group(['prefix' => 'ajax'], function () {
        Route::get('/dashboard', function () {
            return view('admin.layouts2.main');
        })->name('dashboard.ajax');

        // Ibu
        Route::get('/ibu', [IbuController::class, 'ajax'])->name('ibu.ajax');

        // Keluarga
        Route::get('/keluarga', [KeluargaController::class, 'ajax'])->name('keluarga.ajax');

        // Kesehatan
        Route::get('/kesehatan1', [Kesehatan1Controller::class, 'ajax'])->name('kesehatan1.ajax');
        Route::get('/kesehatan2', [Kesehatan2Controller::class, 'ajax'])->name('kesehatan2.ajax');
        Route::get('/kesehatan-bersalin', [KesehatanBersalinController::class, 'ajax'])->name('kesehatan-bersalin.ajax');
        Route::get('/kesehatan-nifas', [KesehatanNifasController::class, 'ajax'])->name('kesehatan-nifas.ajax');

        // Kontrol dan TTD
        Route::get('/kontrol-ttd', [KontrolTtdController::class, 'ajax'])->name('kontrol-ttd.ajax');
        Route::get('/minum-ttd', [MinumTtdController::class, 'ajax'])->name('minum-ttd.ajax');

        // Persalinan
        Route::get('/menyambut-persalinan', [MenyambutPersalinanController::class, 'ajax'])->name('menyambut-persalinan.ajax');
        Route::get('/amanat-penolong-persalinan', [AmanatPenolongPersalinanController::class, 'ajax'])->name('amanat-penolong-persalinan.ajax');
        Route::get('/amanat-kendaraan', [AmanatKendaraanController::class, 'ajax'])->name('amanat-kendaraan.ajax');
        Route::get('/amanat-darah', [AmanatDarahController::class, 'ajax'])->name('amanat-darah.ajax');

        // Evaluasi dan Kondisi
        Route::get('/evaluasi-kesehatan-bumil', [EvaluasiKesehatanBumilController::class, 'ajax'])->name('evaluasi-kesehatan-bumil.ajax');
        Route::get('/kondisi-kesehatan-bumil', [KondisiKesehatanBumilController::class, 'ajax'])->name('kondisi-kesehatan-bumil.ajax');

        // Imunisasi
        Route::get('/imunisasi-t', [ImunisasiTController::class, 'ajax'])->name('imunisasi-t.ajax');

        // Riwayat
        Route::get('/riwayat-kesehatan-bumil', [RiwayatKesehatanBumilController::class, 'ajax'])->name('riwayat-kesehatan-bumil.ajax');
        Route::get('/riwayat-perilaku-berisiko', [RiwayatPerilakuBerisikoController::class, 'ajax'])->name('riwayat-perilaku-berisiko.ajax');
        Route::get('/riwayat-kehamilan', [RiwayatKehamilanController::class, 'ajax'])->name('riwayat-kehamilan.ajax');
        Route::get('/riwayat-penyakit-keluarga', [RiwayatPenyakitKeluargaController::class, 'ajax'])->name('riwayat-penyakit-keluarga.ajax');

        // Pemeriksaan
        Route::get('/pemeriksaan-khusus', [PemeriksaanKhususController::class, 'ajax'])->name('pemeriksaan-khusus.ajax');
        Route::get('/pemeriksaan-trimester1', [PemeriksaanTrimester1Controller::class, 'ajax'])->name('pemeriksaan-trimester1.ajax');
        Route::get('/pemeriksaan-fisik-tri1', [PemeriksaanFisikTri1Controller::class, 'ajax'])->name('pemeriksaan-fisik-tri1.ajax');
        Route::get('/usg-tri1', [UsgTri1Controller::class, 'ajax'])->name('usg-tri1.ajax');
        Route::get('/pemeriksaan-laboratorium-tri1', [PemeriksaanLaboratoriumTri1Controller::class, 'ajax'])->name('pemeriksaan-laboratorium-tri1.ajax');

        // Evaluasi Kehamilan
        Route::get('/evaluasi-kehamilan', [EvaluasiKehamilanController::class, 'ajax'])->name('evaluasi-kehamilan.ajax');
        Route::get('/berat-badan-bumil', [BeratBadanBumilController::class, 'ajax'])->name('berat-badan-bumil.ajax');

        // Preeklampsia
        Route::get('/skrining-preeklampsia', [SkriningPreeklampsiaController::class, 'ajax'])->name('skrining-preeklampsia.ajax');
        Route::get('/preeklampsia-anamnesis', [PreeklampsiaAnamnesisController::class, 'ajax'])->name('preeklampsia-anamnesis.ajax');
        Route::get('/preeklampsia-fisik', [PreeklampsiaFisikController::class, 'ajax'])->name('preeklampsia-fisik.ajax');

        // Trimester 3
        Route::get('/pemeriksaan-trimester3', [PemeriksaanTrimester3Controller::class, 'ajax'])->name('pemeriksaan-trimester3.ajax');
        Route::get('/pemeriksaan-fisik-tri3', [PemeriksaanFisikTri3Controller::class, 'ajax'])->name('pemeriksaan-fisik-tri3.ajax');
        Route::get('/usg-tri3', [UsgTri3Controller::class, 'ajax'])->name('usg-tri3.ajax');
        Route::get('/pemeriksaan-laboratorium-tri3', [PemeriksaanLaboratoriumTri3Controller::class, 'ajax'])->name('pemeriksaan-laboratorium-tri3.ajax');

        // Ringkasan
        Route::get('/ringkasan-kesehatan', [RingkasanKesehatanController::class, 'ajax'])->name('ringkasan-kesehatan.ajax');
        Route::get('/ibu-bersalin', [IbuBersalinController::class, 'ajax'])->name('ibu-bersalin.ajax');
        Route::get('/bayi-lahir', [BayiLahirController::class, 'ajax'])->name('bayi-lahir.ajax');
        Route::get('/ringkasan-nifas', [RingkasanNifasController::class, 'ajax'])->name('ringkasan-nifas.ajax');
        Route::get('/ringkasan-kesimpulan-nifas', [RingkasanKesimpulanNifasController::class, 'ajax'])->name('ringkasan-kesimpulan-nifas.ajax');

        // Rujukan
        Route::get('/rujukan', [RujukanController::class, 'ajax'])->name('rujukan.ajax');

        // Anak
        Route::get('/anak', [AnakController::class, 'ajax'])->name('anak.ajax');
        Route::get('/wali', [WaliController::class, 'ajax'])->name('wali.ajax');
        Route::get('/identitas-anak', [IdentitasAnakController::class, 'ajax'])->name('identitas.anak.ajax');
        Route::get('/bayi-baru-lahir', [BayiBaruLahirController::class, 'ajax'])->name('bayi-baru-lahir.ajax');
        Route::get('/bayi', [BayiController::class, 'ajax'])->name('bayi.ajax');
        Route::get('/anak-balita', [AnakBalitaController::class, 'ajax'])->name('anak-balita.ajax');

        // Kelahiran
        Route::get('/keterangan-lahir', [KeteranganLahirController::class, 'ajax'])->name('keterangan-lahir.ajax');
        Route::get('/riwayat-kelahiran', [RiwayatKelahiranController::class, 'ajax'])->name('riwayat-kelahiran.ajax');

        // Pelayanan Kesehatan
        Route::get('/pelayanan-kesehatan-neonatus', [PelayananKesehatanNeonatusController::class, 'ajax'])->name('pelayanan-kesehatan-neonatus.ajax');
        Route::get('/kn0', [KN0Controller::class, 'ajax'])->name('kn0.ajax');
        Route::get('/kn1', [KN1Controller::class, 'ajax'])->name('kn1.ajax');
        Route::get('/kn2', [KN2Controller::class, 'ajax'])->name('kn2.ajax');
        Route::get('/kn3', [KN3Controller::class, 'ajax'])->name('kn3.ajax');
        Route::get('/imunisasi', [ImunisasiController::class, 'ajax'])->name('imunisasi.ajax');
        Route::get('/pemantauan-kia', [PemantauanKiaController::class, 'ajax'])->name('pemantauan-kia.ajax');
        Route::get('/pelayanan-sdidtk', [PelayananSdidtkController::class, 'ajax'])->name('pelayanan-sdidtk.ajax');

        // Penyimpangan
        Route::get('/penyimpangan-pertumbuhan', [PenyimpanganPertumbuhanController::class, 'ajax'])->name('penyimpangan-pertumbuhan.ajax');
        Route::get('/penyimpangan-perkembangan', [PenyimpanganPerkembanganController::class, 'ajax'])->name('penyimpangan-perkembangan.ajax');
        Route::get('/penyimpangan-emosional', [PenyimpanganEmosionalController::class, 'ajax'])->name('penyimpangan-emosional.ajax');

        // Lainnya
        Route::get('/nasihat-anak', [NasihatAnakController::class, 'ajax'])->name('nasihat-anak.ajax');
        Route::get('/kapsul-anak', [KapsulAnakController::class, 'ajax'])->name('kapsul-anak.ajax');

        // KMS
        Route::get('/kms-perempuan', [KmsPerempuanController::class, 'ajax'])->name('kms-perempuan.ajax');
        Route::get('/data-kms-perempuan', [DataKmsPerempuanController::class, 'ajax'])->name('data-kms-perempuan.ajax');
        Route::get('/bb-u-perempuan', [BbUPerempuanController::class, 'ajax'])->name('bb-u-perempuan.ajax');
        Route::get('/tb-u-perempuan', [TbUPerempuanController::class, 'ajax'])->name('tb-u-perempuan.ajax');
        Route::get('/bb-tb-perempuan', [BbTbPerempuanController::class, 'ajax'])->name('bb-tb-perempuan.ajax');
        Route::get('/lingkar-kepala-perempuan', [LingkarKepalaPerempuanController::class, 'ajax'])->name('lingkar-kepala-perempuan.ajax');

        Route::get('/kms-laki', [KmsLakiController::class, 'ajax'])->name('kms-laki.ajax');
        Route::get('/data-kms-laki', [DataKmsLakiController::class, 'ajax'])->name('data-kms-laki.ajax');
        Route::get('/bb-u-laki', [BbULakiController::class, 'ajax'])->name('bb-u-laki.ajax');
        Route::get('/tb-u-laki', [TbULakiController::class, 'ajax'])->name('tb-u-laki.ajax');
        Route::get('/bb-tb-laki', [BbTbLakiController::class, 'ajax'])->name('bb-tb-laki.ajax');
        Route::get('/lingkar-kepala-laki', [LingkarKepalaLakiController::class, 'ajax'])->name('lingkar-kepala-laki.ajax');

        // IMT
        Route::get('/imt-perempuan', [ImtPerempuanController::class, 'ajax'])->name('imt-perempuan.ajax');
        Route::get('/imt-laki', [ImtLakiController::class, 'ajax'])->name('imt-laki.ajax');

        // Kesehatan Gigi
        Route::get('/kesehatan-gigi', [KesehatanGigiController::class, 'ajax'])->name('kesehatan-gigi.ajax');
        Route::get('/data-kesehatan-gigi', [DataKesehatanGigiController::class, 'ajax'])->name('data-kesehatan-gigi.ajax');

        // Ringkasan
        Route::get('/ringkasan-mtbs', [RingkasanMtbsController::class, 'ajax'])->name('ringkasan-mtbs.ajax');
        Route::get('/ringkasan-pelayanan-dokter', [RingkasanPelayananDokterController::class, 'ajax'])->name('ringkasan-pelayanan-dokter.ajax');

        // Rujukan Anak
        Route::get('/rujukan-anak', [RujukanAnakController::class, 'ajax'])->name('rujukan-anak.ajax');
    });

    Route::group([], function () {
        Route::get('/ibu', [IbuController::class, 'index'])->name('ibu.index');
        Route::post('/ibu/create', [IbuController::class, 'create'])->name('ibu.create');
        Route::post('/ibu/store', [IbuController::class, 'store'])->name('ibu.store');
        Route::get('/ibu/edit/{id}', [IbuController::class, 'edit'])->name('ibu.edit');
        Route::put('/ibu/update/{id}', [IbuController::class, 'update'])->name('ibu.update');
        Route::delete('/ibu/delete/{id}', [IbuController::class, 'destroy'])->name('ibu.delete');

        Route::get('/ibu2', [Ibu2Controller::class, 'index'])->name('ibu2.index');
        Route::post('/ibu2/create', [Ibu2Controller::class, 'create'])->name('ibu2.create');
        Route::post('/ibu2/store', [Ibu2Controller::class, 'store'])->name('ibu2.store');
        Route::get('/ibu2/edit/{id}', [Ibu2Controller::class, 'edit'])->name('ibu2.edit');
        Route::put('/ibu2/update/{id}', [Ibu2Controller::class, 'update'])->name('ibu2.update');
        Route::delete('/ibu2/delete/{id}', [Ibu2Controller::class, 'destroy'])->name('ibu2.delete');

        Route::get('/keluarga', [KeluargaController::class, 'index'])->name('keluarga.index');
        Route::post('/keluarga/create', [KeluargaController::class, 'create'])->name('keluarga.create');
        Route::post('/keluarga/store', [KeluargaController::class, 'store'])->name('keluarga.store');
        Route::get('/keluarga/edit/{id}', [KeluargaController::class, 'edit'])->name('keluarga.edit');
        Route::put('/keluarga/update/{id}', [KeluargaController::class, 'update'])->name('keluarga.update');
        Route::delete('/keluarga/delete/{id}', [KeluargaController::class, 'destroy'])->name('keluarga.delete');

        Route::get('/kesehatan1', [Kesehatan1Controller::class, 'index'])->name('kesehatan1.index');
        Route::post('/kesehatan1/create', [Kesehatan1Controller::class, 'create'])->name('kesehatan1.create');
        Route::post('/kesehatan1/store', [Kesehatan1Controller::class, 'store'])->name('kesehatan1.store');
        Route::get('/kesehatan1/edit/{id}', [Kesehatan1Controller::class, 'edit'])->name('kesehatan1.edit');
        Route::put('/kesehatan1/update/{id}', [Kesehatan1Controller::class, 'update'])->name('kesehatan1.update');
        Route::delete('/kesehatan1/delete/{id}', [Kesehatan1Controller::class, 'destroy'])->name('kesehatan1.delete');

        Route::get('/kesehatan2', [Kesehatan2Controller::class, 'index'])->name('kesehatan2.index');
        Route::post('/kesehatan2/create', [Kesehatan2Controller::class, 'create'])->name('kesehatan2.create');
        Route::post('/kesehatan2/store', [Kesehatan2Controller::class, 'store'])->name('kesehatan2.store');
        Route::get('/kesehatan2/edit/{id}', [Kesehatan2Controller::class, 'edit'])->name('kesehatan2.edit');
        Route::put('/kesehatan2/update/{id}', [Kesehatan2Controller::class, 'update'])->name('kesehatan2.update');
        Route::delete('/kesehatan2/delete/{id}', [Kesehatan2Controller::class, 'destroy'])->name('kesehatan2.delete');

        Route::get('/kesehatan-bersalin', [KesehatanBersalinController::class, 'index'])->name('kesehatan-bersalin.index');
        Route::post('/kesehatan-bersalin/create', [KesehatanBersalinController::class, 'create'])->name('kesehatan-bersalin.create');
        Route::post('/kesehatan-bersalin/store', [KesehatanBersalinController::class, 'store'])->name('kesehatan-bersalin.store');
        Route::get('/kesehatan-bersalin/edit/{id}', [KesehatanBersalinController::class, 'edit'])->name('kesehatan-bersalin.edit');
        Route::put('/kesehatan-bersalin/update/{id}', [KesehatanBersalinController::class, 'update'])->name('kesehatan-bersalin.update');
        Route::delete('/kesehatan-bersalin/delete/{id}', [KesehatanBersalinController::class, 'destroy'])->name('kesehatan-bersalin.delete');

        Route::get('/kesehatan-nifas', [KesehatanNifasController::class, 'index'])->name('kesehatan-nifas.index');
        Route::post('/kesehatan-nifas/create', [KesehatanNifasController::class, 'create'])->name('kesehatan-nifas.create');
        Route::post('/kesehatan-nifas/store', [KesehatanNifasController::class, 'store'])->name('kesehatan-nifas.store');
        Route::get('/kesehatan-nifas/edit/{id}', [KesehatanNifasController::class, 'edit'])->name('kesehatan-nifas.edit');
        Route::put('/kesehatan-nifas/update/{id}', [KesehatanNifasController::class, 'update'])->name('kesehatan-nifas.update');
        Route::delete('/kesehatan-nifas/delete/{id}', [KesehatanNifasController::class, 'destroy'])->name('kesehatan-nifas.delete');

        Route::get('/kontrol-ttd', [KontrolTtdController::class, 'index'])->name('kontrol-ttd.index');
        Route::post('/kontrol-ttd/create', [KontrolTtdController::class, 'create'])->name('kontrol-ttd.create');
        Route::post('/kontrol-ttd/store', [KontrolTtdController::class, 'store'])->name('kontrol-ttd.store');
        Route::get('/kontrol-ttd/edit/{id}', [KontrolTtdController::class, 'edit'])->name('kontrol-ttd.edit');
        Route::put('/kontrol-ttd/update/{id}', [KontrolTtdController::class, 'update'])->name('kontrol-ttd.update');
        Route::delete('/kontrol-ttd/delete/{id}', [KontrolTtdController::class, 'destroy'])->name('kontrol-ttd.delete');

        Route::get('/minum-ttd', [MinumTtdController::class, 'index'])->name('minum-ttd.index');
        Route::post('/minum-ttd/create', [MinumTtdController::class, 'create'])->name('minum-ttd.create');
        Route::post('/minum-ttd/store', [MinumTtdController::class, 'store'])->name('minum-ttd.store');
        Route::get('/minum-ttd/edit/{id}', [MinumTtdController::class, 'edit'])->name('minum-ttd.edit');
        Route::put('/minum-ttd/update/{id}', [MinumTtdController::class, 'update'])->name('minum-ttd.update');
        Route::delete('/minum-ttd/delete/{id}', [MinumTtdController::class, 'destroy'])->name('minum-ttd.delete');

        Route::get('/menyambut-persalinan', [MenyambutPersalinanController::class, 'index'])->name('menyambut-persalinan.index');
        Route::post('/menyambut-persalinan/create', [MenyambutPersalinanController::class, 'create'])->name('menyambut-persalinan.create');
        Route::post('/menyambut-persalinan/store', [MenyambutPersalinanController::class, 'store'])->name('menyambut-persalinan.store');
        Route::get('/menyambut-persalinan/edit/{id}', [MenyambutPersalinanController::class, 'edit'])->name('menyambut-persalinan.edit');
        Route::put('/menyambut-persalinan/update/{id}', [MenyambutPersalinanController::class, 'update'])->name('menyambut-persalinan.update');
        Route::delete('/menyambut-persalinan/delete/{id}', [MenyambutPersalinanController::class, 'destroy'])->name('menyambut-persalinan.delete');

        Route::get('/amanat-penolong-persalinan', [AmanatPenolongPersalinanController::class, 'index'])->name('amanat-penolong-persalinan.index');
        Route::post('/amanat-penolong-persalinan/create', [AmanatPenolongPersalinanController::class, 'create'])->name('amanat-penolong-persalinan.create');
        Route::post('/amanat-penolong-persalinan/store', [AmanatPenolongPersalinanController::class, 'store'])->name('amanat-penolong-persalinan.store');
        Route::get('/amanat-penolong-persalinan/edit/{id}', [AmanatPenolongPersalinanController::class, 'edit'])->name('amanat-penolong-persalinan.edit');
        Route::put('/amanat-penolong-persalinan/update/{id}', [AmanatPenolongPersalinanController::class, 'update'])->name('amanat-penolong-persalinan.update');
        Route::delete('/amanat-penolong-persalinan/delete/{id}', [AmanatPenolongPersalinanController::class, 'destroy'])->name('amanat-penolong-persalinan.delete');

        Route::get('/amanat-kendaraan', [AmanatKendaraanController::class, 'index'])->name('amanat-kendaraan.index');
        Route::post('/amanat-kendaraan/create', [AmanatKendaraanController::class, 'create'])->name('amanat-kendaraan.create');
        Route::post('/amanat-kendaraan/store', [AmanatKendaraanController::class, 'store'])->name('amanat-kendaraan.store');
        Route::get('/amanat-kendaraan/edit/{id}', [AmanatKendaraanController::class, 'edit'])->name('amanat-kendaraan.edit');
        Route::put('/amanat-kendaraan/update/{id}', [AmanatKendaraanController::class, 'update'])->name('amanat-kendaraan.update');
        Route::delete('/amanat-kendaraan/delete/{id}', [AmanatKendaraanController::class, 'destroy'])->name('amanat-kendaraan.delete');

        Route::get('/amanat-darah', [AmanatDarahController::class, 'index'])->name('amanat-darah.index');
        Route::post('/amanat-darah/create', [AmanatDarahController::class, 'create'])->name('amanat-darah.create');
        Route::post('/amanat-darah/store', [AmanatDarahController::class, 'store'])->name('amanat-darah.store');
        Route::get('/amanat-darah/edit/{id}', [AmanatDarahController::class, 'edit'])->name('amanat-darah.edit');
        Route::put('/amanat-darah/update/{id}', [AmanatDarahController::class, 'update'])->name('amanat-darah.update');
        Route::delete('/amanat-darah/delete/{id}', [AmanatDarahController::class, 'destroy'])->name('amanat-darah.delete');

        Route::get('/evaluasi-kesehatan-bumil', [EvaluasiKesehatanBumilController::class, 'index'])->name('evaluasi-kesehatan-bumil.index');
        Route::post('/evaluasi-kesehatan-bumil/create', [EvaluasiKesehatanBumilController::class, 'create'])->name('evaluasi-kesehatan-bumil.create');
        Route::post('/evaluasi-kesehatan-bumil/store', [EvaluasiKesehatanBumilController::class, 'store'])->name('evaluasi-kesehatan-bumil.store');
        Route::get('/evaluasi-kesehatan-bumil/edit/{id}', [EvaluasiKesehatanBumilController::class, 'edit'])->name('evaluasi-kesehatan-bumil.edit');
        Route::put('/evaluasi-kesehatan-bumil/update/{id}', [EvaluasiKesehatanBumilController::class, 'update'])->name('evaluasi-kesehatan-bumil.update');
        Route::delete('/evaluasi-kesehatan-bumil/delete/{id}', [EvaluasiKesehatanBumilController::class, 'destroy'])->name('evaluasi-kesehatan-bumil.delete');

        Route::get('/kondisi-kesehatan-bumil', [KondisiKesehatanBumilController::class, 'index'])->name('kondisi-kesehatan-bumil.index');
        Route::post('/kondisi-kesehatan-bumil/create', [KondisiKesehatanBumilController::class, 'create'])->name('kondisi-kesehatan-bumil.create');
        Route::post('/kondisi-kesehatan-bumil/store', [KondisiKesehatanBumilController::class, 'store'])->name('kondisi-kesehatan-bumil.store');
        Route::get('/kondisi-kesehatan-bumil/edit/{id}', [KondisiKesehatanBumilController::class, 'edit'])->name('kondisi-kesehatan-bumil.edit');
        Route::put('/kondisi-kesehatan-bumil/update/{id}', [KondisiKesehatanBumilController::class, 'update'])->name('kondisi-kesehatan-bumil.update');
        Route::delete('/kondisi-kesehatan-bumil/delete/{id}', [KondisiKesehatanBumilController::class, 'destroy'])->name('kondisi-kesehatan-bumil.delete');

        Route::get('/imunisasi-t', [ImunisasiTController::class, 'index'])->name('imunisasi-t.index');
        Route::post('/imunisasi-t/create', [ImunisasiTController::class, 'create'])->name('imunisasi-t.create');
        Route::post('/imunisasi-t/store', [ImunisasiTController::class, 'store'])->name('imunisasi-t.store');
        Route::get('/imunisasi-t/edit/{id}', [ImunisasiTController::class, 'edit'])->name('imunisasi-t.edit');
        Route::put('/imunisasi-t/update/{id}', [ImunisasiTController::class, 'update'])->name('imunisasi-t.update');
        Route::delete('/imunisasi-t/delete/{id}', [ImunisasiTController::class, 'destroy'])->name('imunisasi-t.delete');

        Route::get('/riwayat-kesehatan-bumil', [RiwayatKesehatanBumilController::class, 'index'])->name('riwayat-kesehatan-bumil.index');
        Route::post('/riwayat-kesehatan-bumil/create', [RiwayatKesehatanBumilController::class, 'create'])->name('riwayat-kesehatan-bumil.create');
        Route::post('/riwayat-kesehatan-bumil/store', [RiwayatKesehatanBumilController::class, 'store'])->name('riwayat-kesehatan-bumil.store');
        Route::get('/riwayat-kesehatan-bumil/edit/{id}', [RiwayatKesehatanBumilController::class, 'edit'])->name('riwayat-kesehatan-bumil.edit');
        Route::put('/riwayat-kesehatan-bumil/update/{id}', [RiwayatKesehatanBumilController::class, 'update'])->name('riwayat-kesehatan-bumil.update');
        Route::delete('/riwayat-kesehatan-bumil/delete/{id}', [RiwayatKesehatanBumilController::class, 'destroy'])->name('riwayat-kesehatan-bumil.delete');

        Route::get('/riwayat-perilaku-berisiko', [RiwayatPerilakuBerisikoController::class, 'index'])->name('riwayat-perilaku-berisiko.index');
        Route::post('/riwayat-perilaku-berisiko/create', [RiwayatPerilakuBerisikoController::class, 'create'])->name('riwayat-perilaku-berisiko.create');
        Route::post('/riwayat-perilaku-berisiko/store', [RiwayatPerilakuBerisikoController::class, 'store'])->name('riwayat-perilaku-berisiko.store');
        Route::get('/riwayat-perilaku-berisiko/edit/{id}', [RiwayatPerilakuBerisikoController::class, 'edit'])->name('riwayat-perilaku-berisiko.edit');
        Route::put('/riwayat-perilaku-berisiko/update/{id}', [RiwayatPerilakuBerisikoController::class, 'update'])->name('riwayat-perilaku-berisiko.update');
        Route::delete('/riwayat-perilaku-berisiko/delete/{id}', [RiwayatPerilakuBerisikoController::class, 'destroy'])->name('riwayat-perilaku-berisiko.delete');

        Route::get('/riwayat-kehamilan', [RiwayatKehamilanController::class, 'index'])->name('riwayat-kehamilan.index');
        Route::post('/riwayat-kehamilan/create', [RiwayatKehamilanController::class, 'create'])->name('riwayat-kehamilan.create');
        Route::post('/riwayat-kehamilan/store', [RiwayatKehamilanController::class, 'store'])->name('riwayat-kehamilan.store');
        Route::get('/riwayat-kehamilan/edit/{id}', [RiwayatKehamilanController::class, 'edit'])->name('riwayat-kehamilan.edit');
        Route::put('/riwayat-kehamilan/update/{id}', [RiwayatKehamilanController::class, 'update'])->name('riwayat-kehamilan.update');
        Route::delete('/riwayat-kehamilan/delete/{id}', [RiwayatKehamilanController::class, 'destroy'])->name('riwayat-kehamilan.delete');

        Route::get('/riwayat-penyakit-keluarga', [RiwayatPenyakitKeluargaController::class, 'index'])->name('riwayat-penyakit-keluarga.index');
        Route::post('/riwayat-penyakit-keluarga/create', [RiwayatPenyakitKeluargaController::class, 'create'])->name('riwayat-penyakit-keluarga.create');
        Route::post('/riwayat-penyakit-keluarga/store', [RiwayatPenyakitKeluargaController::class, 'store'])->name('riwayat-penyakit-keluarga.store');
        Route::get('/riwayat-penyakit-keluarga/edit/{id}', [RiwayatPenyakitKeluargaController::class, 'edit'])->name('riwayat-penyakit-keluarga.edit');
        Route::put('/riwayat-penyakit-keluarga/update/{id}', [RiwayatPenyakitKeluargaController::class, 'update'])->name('riwayat-penyakit-keluarga.update');
        Route::delete('/riwayat-penyakit-keluarga/delete/{id}', [RiwayatPenyakitKeluargaController::class, 'destroy'])->name('riwayat-penyakit-keluarga.delete');

        Route::get('/pemeriksaan-khusus', [PemeriksaanKhususController::class, 'index'])->name('pemeriksaan-khusus.index');
        Route::post('/pemeriksaan-khusus/create', [PemeriksaanKhususController::class, 'create'])->name('pemeriksaan-khusus.create');
        Route::post('/pemeriksaan-khusus/store', [PemeriksaanKhususController::class, 'store'])->name('pemeriksaan-khusus.store');
        Route::get('/pemeriksaan-khusus/edit/{id}', [PemeriksaanKhususController::class, 'edit'])->name('pemeriksaan-khusus.edit');
        Route::put('/pemeriksaan-khusus/update/{id}', [PemeriksaanKhususController::class, 'update'])->name('pemeriksaan-khusus.update');
        Route::delete('/pemeriksaan-khusus/delete/{id}', [PemeriksaanKhususController::class, 'destroy'])->name('pemeriksaan-khusus.delete');

        Route::get('/pemeriksaan-trimester1', [PemeriksaanTrimester1Controller::class, 'index'])->name('pemeriksaan-trimester1.index');
        Route::post('/pemeriksaan-trimester1/create', [PemeriksaanTrimester1Controller::class, 'create'])->name('pemeriksaan-trimester1.create');
        Route::post('/pemeriksaan-trimester1/store', [PemeriksaanTrimester1Controller::class, 'store'])->name('pemeriksaan-trimester1.store');
        Route::get('/pemeriksaan-trimester1/edit/{id}', [PemeriksaanTrimester1Controller::class, 'edit'])->name('pemeriksaan-trimester1.edit');
        Route::put('/pemeriksaan-trimester1/update/{id}', [PemeriksaanTrimester1Controller::class, 'update'])->name('pemeriksaan-trimester1.update');
        Route::delete('/pemeriksaan-trimester1/delete/{id}', [PemeriksaanTrimester1Controller::class, 'destroy'])->name('pemeriksaan-trimester1.delete');

        Route::get('/pemeriksaan-fisik-tri1', [PemeriksaanFisikTri1Controller::class, 'index'])->name('pemeriksaan-fisik-tri1.index');
        Route::post('/pemeriksaan-fisik-tri1/create', [PemeriksaanFisikTri1Controller::class, 'create'])->name('pemeriksaan-fisik-tri1.create');
        Route::post('/pemeriksaan-fisik-tri1/store', [PemeriksaanFisikTri1Controller::class, 'store'])->name('pemeriksaan-fisik-tri1.store');
        Route::get('/pemeriksaan-fisik-tri1/edit/{id}', [PemeriksaanFisikTri1Controller::class, 'edit'])->name('pemeriksaan-fisik-tri1.edit');
        Route::put('/pemeriksaan-fisik-tri1/update/{id}', [PemeriksaanFisikTri1Controller::class, 'update'])->name('pemeriksaan-fisik-tri1.update');
        Route::delete('/pemeriksaan-fisik-tri1/delete/{id}', [PemeriksaanFisikTri1Controller::class, 'destroy'])->name('pemeriksaan-fisik-tri1.delete');

        Route::get('/usg-tri1', [UsgTri1Controller::class, 'index'])->name('usg-tri1.index');
        Route::post('/usg-tri1/create', [UsgTri1Controller::class, 'create'])->name('usg-tri1.create');
        Route::post('/usg-tri1/store', [UsgTri1Controller::class, 'store'])->name('usg-tri1.store');
        Route::get('/usg-tri1/edit/{id}', [UsgTri1Controller::class, 'edit'])->name('usg-tri1.edit');
        Route::put('/usg-tri1/update/{id}', [UsgTri1Controller::class, 'update'])->name('usg-tri1.update');
        Route::delete('/usg-tri1/delete/{id}', [UsgTri1Controller::class, 'destroy'])->name('usg-tri1.delete');

        Route::get('/pemeriksaan-laboratorium-tri1', [PemeriksaanLaboratoriumTri1Controller::class, 'index'])->name('pemeriksaan-laboratorium-tri1.index');
        Route::post('/pemeriksaan-laboratorium-tri1/create', [PemeriksaanLaboratoriumTri1Controller::class, 'create'])->name('pemeriksaan-laboratorium-tri1.create');
        Route::post('/pemeriksaan-laboratorium-tri1/store', [PemeriksaanLaboratoriumTri1Controller::class, 'store'])->name('pemeriksaan-laboratorium-tri1.store');
        Route::get('/pemeriksaan-laboratorium-tri1/edit/{id}', [PemeriksaanLaboratoriumTri1Controller::class, 'edit'])->name('pemeriksaan-laboratorium-tri1.edit');
        Route::put('/pemeriksaan-laboratorium-tri1/update/{id}', [PemeriksaanLaboratoriumTri1Controller::class, 'update'])->name('pemeriksaan-laboratorium-tri1.update');
        Route::delete('/pemeriksaan-laboratorium-tri1/delete/{id}', [PemeriksaanLaboratoriumTri1Controller::class, 'destroy'])->name('pemeriksaan-laboratorium-tri1.delete');

        Route::get('/evaluasi-kehamilan', [EvaluasiKehamilanController::class, 'index'])->name('evaluasi-kehamilan.index');
        Route::post('/evaluasi-kehamilan/create', [EvaluasiKehamilanController::class, 'create'])->name('evaluasi-kehamilan.create');
        Route::post('/evaluasi-kehamilan/store', [EvaluasiKehamilanController::class, 'store'])->name('evaluasi-kehamilan.store');
        Route::get('/evaluasi-kehamilan/edit/{id}', [EvaluasiKehamilanController::class, 'edit'])->name('evaluasi-kehamilan.edit');
        Route::put('/evaluasi-kehamilan/update/{id}', [EvaluasiKehamilanController::class, 'update'])->name('evaluasi-kehamilan.update');
        Route::delete('/evaluasi-kehamilan/delete/{id}', [EvaluasiKehamilanController::class, 'destroy'])->name('evaluasi-kehamilan.delete');

        Route::get('/berat-badan-bumil', [BeratBadanBumilController::class, 'index'])->name('berat-badan-bumil.index');
        Route::post('/berat-badan-bumil/create', [BeratBadanBumilController::class, 'create'])->name('berat-badan-bumil.create');
        Route::post('/berat-badan-bumil/store', [BeratBadanBumilController::class, 'store'])->name('berat-badan-bumil.store');
        Route::get('/berat-badan-bumil/edit/{id}', [BeratBadanBumilController::class, 'edit'])->name('berat-badan-bumil.edit');
        Route::put('/berat-badan-bumil/update/{id}', [BeratBadanBumilController::class, 'update'])->name('berat-badan-bumil.update');
        Route::delete('/berat-badan-bumil/delete/{id}', [BeratBadanBumilController::class, 'destroy'])->name('berat-badan-bumil.delete');

        Route::get('/skrining-preeklampsia', [SkriningPreeklampsiaController::class, 'index'])->name('skrining-preeklampsia.index');
        Route::post('/skrining-preeklampsia/create', [SkriningPreeklampsiaController::class, 'create'])->name('skrining-preeklampsia.create');
        Route::post('/skrining-preeklampsia/store', [SkriningPreeklampsiaController::class, 'store'])->name('skrining-preeklampsia.store');
        Route::get('/skrining-preeklampsia/edit/{id}', [SkriningPreeklampsiaController::class, 'edit'])->name('skrining-preeklampsia.edit');
        Route::put('/skrining-preeklampsia/update/{id}', [SkriningPreeklampsiaController::class, 'update'])->name('skrining-preeklampsia.update');
        Route::delete('/skrining-preeklampsia/delete/{id}', [SkriningPreeklampsiaController::class, 'destroy'])->name('skrining-preeklampsia.delete');

        Route::get('/preeklampsia-anamnesis', [PreeklampsiaAnamnesisController::class, 'index'])->name('preeklampsia-anamnesis.index');
        Route::post('/preeklampsia-anamnesis/create', [PreeklampsiaAnamnesisController::class, 'create'])->name('preeklampsia-anamnesis.create');
        Route::post('/preeklampsia-anamnesis/store', [PreeklampsiaAnamnesisController::class, 'store'])->name('preeklampsia-anamnesis.store');
        Route::get('/preeklampsia-anamnesis/edit/{id}', [PreeklampsiaAnamnesisController::class, 'edit'])->name('preeklampsia-anamnesis.edit');
        Route::put('/preeklampsia-anamnesis/update/{id}', [PreeklampsiaAnamnesisController::class, 'update'])->name('preeklampsia-anamnesis.update');
        Route::delete('/preeklampsia-anamnesis/delete/{id}', [PreeklampsiaAnamnesisController::class, 'destroy'])->name('preeklampsia-anamnesis.delete');

        Route::get('/preeklampsia-fisik', [PreeklampsiaFisikController::class, 'index'])->name('preeklampsia-fisik.index');
        Route::post('/preeklampsia-fisik/create', [PreeklampsiaFisikController::class, 'create'])->name('preeklampsia-fisik.create');
        Route::post('/preeklampsia-fisik/store', [PreeklampsiaFisikController::class, 'store'])->name('preeklampsia-fisik.store');
        Route::get('/preeklampsia-fisik/edit/{id}', [PreeklampsiaFisikController::class, 'edit'])->name('preeklampsia-fisik.edit');
        Route::put('/preeklampsia-fisik/update/{id}', [PreeklampsiaFisikController::class, 'update'])->name('preeklampsia-fisik.update');
        Route::delete('/preeklampsia-fisik/delete/{id}', [PreeklampsiaFisikController::class, 'destroy'])->name('preeklampsia-fisik.delete');

        Route::get('/pemeriksaan-trimester3', [PemeriksaanTrimester3Controller::class, 'index'])->name('pemeriksaan-trimester3.index');
        Route::post('/pemeriksaan-trimester3/create', [PemeriksaanTrimester3Controller::class, 'create'])->name('pemeriksaan-trimester3.create');
        Route::post('/pemeriksaan-trimester3/store', [PemeriksaanTrimester3Controller::class, 'store'])->name('pemeriksaan-trimester3.store');
        Route::get('/pemeriksaan-trimester3/edit/{id}', [PemeriksaanTrimester3Controller::class, 'edit'])->name('pemeriksaan-trimester3.edit');
        Route::put('/pemeriksaan-trimester3/update/{id}', [PemeriksaanTrimester3Controller::class, 'update'])->name('pemeriksaan-trimester3.update');
        Route::delete('/pemeriksaan-trimester3/delete/{id}', [PemeriksaanTrimester3Controller::class, 'destroy'])->name('pemeriksaan-trimester3.delete');

        Route::get('/pemeriksaan-fisik-tri3', [PemeriksaanFisikTri3Controller::class, 'index'])->name('pemeriksaan-fisik-tri3.index');
        Route::post('/pemeriksaan-fisik-tri3/create', [PemeriksaanFisikTri3Controller::class, 'create'])->name('pemeriksaan-fisik-tri3.create');
        Route::post('/pemeriksaan-fisik-tri3/store', [PemeriksaanFisikTri3Controller::class, 'store'])->name('pemeriksaan-fisik-tri3.store');
        Route::get('/pemeriksaan-fisik-tri3/edit/{id}', [PemeriksaanFisikTri3Controller::class, 'edit'])->name('pemeriksaan-fisik-tri3.edit');
        Route::put('/pemeriksaan-fisik-tri3/update/{id}', [PemeriksaanFisikTri3Controller::class, 'update'])->name('pemeriksaan-fisik-tri3.update');
        Route::delete('/pemeriksaan-fisik-tri3/delete/{id}', [PemeriksaanFisikTri3Controller::class, 'destroy'])->name('pemeriksaan-fisik-tri3.delete');

        Route::get('/usg-tri3', [UsgTri3Controller::class, 'index'])->name('usg-tri3.index');
        Route::post('/usg-tri3/create', [UsgTri3Controller::class, 'create'])->name('usg-tri3.create');
        Route::post('/usg-tri3/store', [UsgTri3Controller::class, 'store'])->name('usg-tri3.store');
        Route::get('/usg-tri3/edit/{id}', [UsgTri3Controller::class, 'edit'])->name('usg-tri3.edit');
        Route::put('/usg-tri3/update/{id}', [UsgTri3Controller::class, 'update'])->name('usg-tri3.update');
        Route::delete('/usg-tri3/delete/{id}', [UsgTri3Controller::class, 'destroy'])->name('usg-tri3.delete');

        Route::get('/pemeriksaan-laboratorium-tri3', [PemeriksaanLaboratoriumTri3Controller::class, 'index'])->name('pemeriksaan-laboratorium-tri3.index');
        Route::post('/pemeriksaan-laboratorium-tri3/create', [PemeriksaanLaboratoriumTri3Controller::class, 'create'])->name('pemeriksaan-laboratorium-tri3.create');
        Route::post('/pemeriksaan-laboratorium-tri3/store', [PemeriksaanLaboratoriumTri3Controller::class, 'store'])->name('pemeriksaan-laboratorium-tri3.store');
        Route::get('/pemeriksaan-laboratorium-tri3/edit/{id}', [PemeriksaanLaboratoriumTri3Controller::class, 'edit'])->name('pemeriksaan-laboratorium-tri3.edit');
        Route::put('/pemeriksaan-laboratorium-tri3/update/{id}', [PemeriksaanLaboratoriumTri3Controller::class, 'update'])->name('pemeriksaan-laboratorium-tri3.update');
        Route::delete('/pemeriksaan-laboratorium-tri3/delete/{id}', [PemeriksaanLaboratoriumTri3Controller::class, 'destroy'])->name('pemeriksaan-laboratorium-tri3.delete');

        Route::get('/ringkasan-kesehatan', [RingkasanKesehatanController::class, 'index'])->name('ringkasan-kesehatan.index');
        Route::post('/ringkasan-kesehatan/create', [RingkasanKesehatanController::class, 'create'])->name('ringkasan-kesehatan.create');
        Route::post('/ringkasan-kesehatan/store', [RingkasanKesehatanController::class, 'store'])->name('ringkasan-kesehatan.store');
        Route::get('/ringkasan-kesehatan/edit/{id}', [RingkasanKesehatanController::class, 'edit'])->name('ringkasan-kesehatan.edit');
        Route::put('/ringkasan-kesehatan/update/{id}', [RingkasanKesehatanController::class, 'update'])->name('ringkasan-kesehatan.update');
        Route::delete('/ringkasan-kesehatan/delete/{id}', [RingkasanKesehatanController::class, 'destroy'])->name('ringkasan-kesehatan.delete');

        Route::get('/ibu-bersalin', [RingkasanKesehatanController::class, 'index'])->name('ibu-bersalin.index');
        Route::post('/ibu-bersalin/create', [RingkasanKesehatanController::class, 'create'])->name('ibu-bersalin.create');
        Route::post('/ibu-bersalin/store', [RingkasanKesehatanController::class, 'store'])->name('ibu-bersalin.store');
        Route::get('/ibu-bersalin/edit/{id}', [RingkasanKesehatanController::class, 'edit'])->name('ibu-bersalin.edit');
        Route::put('/ibu-bersalin/update/{id}', [RingkasanKesehatanController::class, 'update'])->name('ibu-bersalin.update');
        Route::delete('/ibu-bersalin/delete/{id}', [RingkasanKesehatanController::class, 'destroy'])->name('ibu-bersalin.delete');

        Route::get('/bayi-lahir', [RingkasanKesehatanController::class, 'index'])->name('bayi-lahir.index');
        Route::post('/bayi-lahir/create', [RingkasanKesehatanController::class, 'create'])->name('bayi-lahir.create');
        Route::post('/bayi-lahir/store', [RingkasanKesehatanController::class, 'store'])->name('bayi-lahir.store');
        Route::get('/bayi-lahir/edit/{id}', [RingkasanKesehatanController::class, 'edit'])->name('bayi-lahir.edit');
        Route::put('/bayi-lahir/update/{id}', [RingkasanKesehatanController::class, 'update'])->name('bayi-lahir.update');
        Route::delete('/bayi-lahir/delete/{id}', [RingkasanKesehatanController::class, 'destroy'])->name('bayi-lahir.delete');

        Route::get('/ringkasan-nifas', [RingkasanNifasController::class, 'index'])->name('ringkasan-nifas.index');
        Route::post('/ringkasan-nifas/create', [RingkasanNifasController::class, 'create'])->name('ringkasan-nifas.create');
        Route::post('/ringkasan-nifas/store', [RingkasanNifasController::class, 'store'])->name('ringkasan-nifas.store');
        Route::get('/ringkasan-nifas/edit/{id}', [RingkasanNifasController::class, 'edit'])->name('ringkasan-nifas.edit');
        Route::put('/ringkasan-nifas/update/{id}', [RingkasanNifasController::class, 'update'])->name('ringkasan-nifas.update');
        Route::delete('/ringkasan-nifas/delete/{id}', [RingkasanNifasController::class, 'destroy'])->name('ringkasan-nifas.delete');

        Route::get('/ringkasan-kesimpulan-nifas', [RingkasanKesimpulanNifasController::class, 'index'])->name('ringkasan-kesimpulan-nifas.index');
        Route::post('/ringkasan-kesimpulan-nifas/create', [RingkasanKesimpulanNifasController::class, 'create'])->name('ringkasan-kesimpulan-nifas.create');
        Route::post('/ringkasan-kesimpulan-nifas/store', [RingkasanKesimpulanNifasController::class, 'store'])->name('ringkasan-kesimpulan-nifas.store');
        Route::get('/ringkasan-kesimpulan-nifas/edit/{id}', [RingkasanKesimpulanNifasController::class, 'edit'])->name('ringkasan-kesimpulan-nifas.edit');
        Route::put('/ringkasan-kesimpulan-nifas/update/{id}', [RingkasanKesimpulanNifasController::class, 'update'])->name('ringkasan-kesimpulan-nifas.update');
        Route::delete('/ringkasan-kesimpulan-nifas/delete/{id}', [RingkasanKesimpulanNifasController::class, 'destroy'])->name('ringkasan-kesimpulan-nifas.delete');

        Route::get('/rujukan', [RujukanController::class, 'index'])->name('rujukan.index');
        Route::post('/rujukan/create', [RujukanController::class, 'create'])->name('rujukan.create');
        Route::post('/rujukan/store', [RujukanController::class, 'store'])->name('rujukan.store');
        Route::get('/rujukan/edit/{id}', [RujukanController::class, 'edit'])->name('rujukan.edit');
        Route::put('/rujukan/update/{id}', [RujukanController::class, 'update'])->name('rujukan.update');
        Route::delete('/rujukan/delete/{id}', [RujukanController::class, 'destroy'])->name('rujukan.delete');

        Route::get('/wali', [WaliController::class, 'index'])->name('wali.index');
        Route::post('/wali/create', [WaliController::class, 'create'])->name('wali.create');
        Route::post('/wali/store', [WaliController::class, 'store'])->name('wali.store');
        Route::get('/wali/edit/{id}', [WaliController::class, 'edit'])->name('wali.edit');
        Route::put('/wali/update/{id}', [WaliController::class, 'update'])->name('wali.update');
        Route::delete('/wali/delete/{id}', [WaliController::class, 'destroy'])->name('wali.delete');
    });

    Route::group([], function () {
        Route::get('/anak', [AnakController::class, 'index'])->name('anak.index');
        Route::post('/anak/create', [AnakController::class, 'create'])->name('anak.create');
        Route::post('/anak/store', [AnakController::class, 'store'])->name('anak.store');
        Route::get('/anak/edit/{id}', [AnakController::class, 'edit'])->name('anak.edit');
        Route::put('/anak/update/{id}', [AnakController::class, 'update'])->name('anak.update');
        Route::delete('/anak/delete/{id}', [AnakController::class, 'destroy'])->name('anak.delete');

        Route::get('/anak', [AnakController::class, 'index'])->name('anak.index');
        Route::post('/anak/create', [AnakController::class, 'create'])->name('anak.create');
        Route::post('/anak/store', [AnakController::class, 'store'])->name('anak.store');
        Route::get('/anak/edit/{id}', [AnakController::class, 'edit'])->name('anak.edit');
        Route::put('/anak/update/{id}', [AnakController::class, 'update'])->name('anak.update');
        Route::delete('/anak/delete/{id}', [AnakController::class, 'destroy'])->name('anak.delete');

        Route::post('/identitas-anak', [IdentitasAnakController::class, 'create'])->name('identitas.anak.create');
        Route::post('/identitas-anak', [IdentitasAnakController::class, 'store'])->name('identitas.anak.store');
        Route::get('/identitas-anak/edit/{id}', [IdentitasAnakController::class, 'edit'])->name('identitas.anak.edit');
        Route::put('/identitas-anak/update/{id}', [IdentitasAnakController::class, 'update'])->name('identitas.anak.update');
        Route::delete('/identitas-anak/delete/{id}', [IdentitasAnakController::class, 'destroy'])->name('identitas.anak.delete');
        Route::get('/identitas-anak/data', [IdentitasAnakController::class, 'getData'])->name('identitas.anak.data');

        Route::get('/bayi-baru-lahir', [BayiBaruLahirController::class, 'index'])->name('bayi-baru-lahir.index');
        Route::post('/bayi-baru-lahir/create', [BayiBaruLahirController::class, 'create'])->name('bayi-baru-lahir.create');
        Route::post('/bayi-baru-lahir/store', [BayiBaruLahirController::class, 'store'])->name('bayi-baru-lahir.store');
        Route::get('/bayi-baru-lahir/edit/{id}', [BayiBaruLahirController::class, 'edit'])->name('bayi-baru-lahir.edit');
        Route::put('/bayi-baru-lahir/update/{id}', [BayiBaruLahirController::class, 'update'])->name('bayi-baru-lahir.update');
        Route::delete('/bayi-baru-lahir/delete/{id}', [BayiBaruLahirController::class, 'destroy'])->name('bayi-baru-lahir.delete');

        Route::get('/bayi', [BayiController::class, 'index'])->name('bayi.index');
        Route::post('/bayi/create', [BayiController::class, 'create'])->name('bayi.create');
        Route::post('/bayi/store', [BayiController::class, 'store'])->name('bayi.store');
        Route::get('/bayi/edit/{id}', [BayiController::class, 'edit'])->name('bayi.edit');
        Route::put('/bayi/update/{id}', [BayiController::class, 'update'])->name('bayi.update');
        Route::delete('/bayi/delete/{id}', [BayiController::class, 'destroy'])->name('bayi.delete');

        Route::get('/anak-balita', [AnakBalitaController::class, 'index'])->name('anak-balita.index');
        Route::post('/anak-balita/create', [AnakBalitaController::class, 'create'])->name('anak-balita.create');
        Route::post('/anak-balita/store', [AnakBalitaController::class, 'store'])->name('anak-balita.store');
        Route::get('/anak-balita/edit/{id}', [AnakBalitaController::class, 'edit'])->name('anak-balita.edit');
        Route::put('/anak-balita/update/{id}', [AnakBalitaController::class, 'update'])->name('anak-balita.update');
        Route::delete('/anak-balita/delete/{id}', [AnakBalitaController::class, 'destroy'])->name('anak-balita.delete');

        Route::get('/keterangan-lahir', [KeteranganLahirController::class, 'index'])->name('keterangan-lahir.index');
        Route::post('/keterangan-lahir/create', [KeteranganLahirController::class, 'create'])->name('keterangan-lahir.create');
        Route::post('/keterangan-lahir/store', [KeteranganLahirController::class, 'store'])->name('keterangan-lahir.store');
        Route::get('/keterangan-lahir/edit/{id}', [KeteranganLahirController::class, 'edit'])->name('keterangan-lahir.edit');
        Route::put('/keterangan-lahir/update/{id}', [KeteranganLahirController::class, 'update'])->name('keterangan-lahir.update');
        Route::delete('/keterangan-lahir/delete/{id}', [KeteranganLahirController::class, 'destroy'])->name('keterangan-lahir.delete');

        Route::get('/riwayat-kelahiran', [RiwayatKelahiranController::class, 'index'])->name('riwayat-kelahiran.index');
        Route::post('/riwayat-kelahiran/create', [RiwayatKelahiranController::class, 'create'])->name('riwayat-kelahiran.create');
        Route::post('/riwayat-kelahiran/store', [RiwayatKelahiranController::class, 'store'])->name('riwayat-kelahiran.store');
        Route::get('/riwayat-kelahiran/edit/{id}', [RiwayatKelahiranController::class, 'edit'])->name('riwayat-kelahiran.edit');
        Route::put('/riwayat-kelahiran/update/{id}', [RiwayatKelahiranController::class, 'update'])->name('riwayat-kelahiran.update');
        Route::delete('/riwayat-kelahiran/delete/{id}', [RiwayatKelahiranController::class, 'destroy'])->name('riwayat-kelahiran.delete');

        Route::get('/pelayanan-kesehatan-neonatus', [PelayananKesehatanNeonatusController::class, 'index'])->name('pelayanan-kesehatan-neonatus.index');
        Route::post('/pelayanan-kesehatan-neonatus/create', [PelayananKesehatanNeonatusController::class, 'create'])->name('pelayanan-kesehatan-neonatus.create');
        Route::post('/pelayanan-kesehatan-neonatus/store', [PelayananKesehatanNeonatusController::class, 'store'])->name('pelayanan-kesehatan-neonatus.store');
        Route::get('/pelayanan-kesehatan-neonatus/edit/{id}', [PelayananKesehatanNeonatusController::class, 'edit'])->name('pelayanan-kesehatan-neonatus.edit');
        Route::put('/pelayanan-kesehatan-neonatus/update/{id}', [PelayananKesehatanNeonatusController::class, 'update'])->name('pelayanan-kesehatan-neonatus.update');
        Route::delete('/pelayanan-kesehatan-neonatus/delete/{id}', [PelayananKesehatanNeonatusController::class, 'destroy'])->name('pelayanan-kesehatan-neonatus.delete');

        Route::get('/kn0', [KN0Controller::class, 'index'])->name('kn0.index');
        Route::post('/kn0/create', [KN0Controller::class, 'create'])->name('kn0.create');
        Route::post('/kn0/store', [KN0Controller::class, 'store'])->name('kn0.store');
        Route::get('/kn0/edit/{id}', [KN0Controller::class, 'edit'])->name('kn0.edit');
        Route::put('/kn0/update/{id}', [KN0Controller::class, 'update'])->name('kn0.update');
        Route::delete('/kn0/delete/{id}', [KN0Controller::class, 'destroy'])->name('kn0.delete');

        Route::get('/kn1', [KN1Controller::class, 'index'])->name('kn1.index');
        Route::post('/kn1/create', [KN1Controller::class, 'create'])->name('kn1.create');
        Route::post('/kn1/store', [KN1Controller::class, 'store'])->name('kn1.store');
        Route::get('/kn1/edit/{id}', [KN1Controller::class, 'edit'])->name('kn1.edit');
        Route::put('/kn1/update/{id}', [KN1Controller::class, 'update'])->name('kn1.update');
        Route::delete('/kn1/delete/{id}', [KN1Controller::class, 'destroy'])->name('kn1.delete');

        Route::get('/kn2', [KN2Controller::class, 'index'])->name('kn2.index');
        Route::post('/kn2/create', [KN2Controller::class, 'create'])->name('kn2.create');
        Route::post('/kn2/store', [KN2Controller::class, 'store'])->name('kn2.store');
        Route::get('/kn2/edit/{id}', [KN2Controller::class, 'edit'])->name('kn2.edit');
        Route::put('/kn2/update/{id}', [KN2Controller::class, 'update'])->name('kn2.update');
        Route::delete('/kn2/delete/{id}', [KN2Controller::class, 'destroy'])->name('kn2.delete');

        Route::get('/kn3', [KN3Controller::class, 'index'])->name('kn3.index');
        Route::post('/kn3/create', [KN3Controller::class, 'create'])->name('kn3.create');
        Route::post('/kn3/store', [KN3Controller::class, 'store'])->name('kn3.store');
        Route::get('/kn3/edit/{id}', [KN3Controller::class, 'edit'])->name('kn3.edit');
        Route::put('/kn3/update/{id}', [KN3Controller::class, 'update'])->name('kn3.update');
        Route::delete('/kn3/delete/{id}', [KN3Controller::class, 'destroy'])->name('kn3.delete');

        Route::get('/imunisasi', [ImunisasiController::class, 'index'])->name('imunisasi.index');
        Route::post('/imunisasi/create', [ImunisasiController::class, 'create'])->name('imunisasi.create');
        Route::post('/imunisasi/store', [ImunisasiController::class, 'store'])->name('imunisasi.store');
        Route::get('/imunisasi/edit/{id}', [ImunisasiController::class, 'edit'])->name('imunisasi.edit');
        Route::put('/imunisasi/update/{id}', [ImunisasiController::class, 'update'])->name('imunisasi.update');
        Route::delete('/imunisasi/delete/{id}', [ImunisasiController::class, 'destroy'])->name('imunisasi.delete');

        Route::get('/pemantauan-kia', [PemantauanKiaController::class, 'index'])->name('pemantauan-kia.index');
        Route::post('/pemantauan-kia/create', [PemantauanKiaController::class, 'create'])->name('pemantauan-kia.create');
        Route::post('/pemantauan-kia/store', [PemantauanKiaController::class, 'store'])->name('pemantauan-kia.store');
        Route::get('/pemantauan-kia/edit/{id}', [PemantauanKiaController::class, 'edit'])->name('pemantauan-kia.edit');
        Route::put('/pemantauan-kia/update/{id}', [PemantauanKiaController::class, 'update'])->name('pemantauan-kia.update');
        Route::delete('/pemantauan-kia/delete/{id}', [PemantauanKiaController::class, 'destroy'])->name('pemantauan-kia.delete');

        Route::get('/pelayanan-sdidtk', [PelayananSdidtkController::class, 'index'])->name('pelayanan-sdidtk.index');
        Route::post('/pelayanan-sdidtk/create', [PelayananSdidtkController::class, 'create'])->name('pelayanan-sdidtk.create');
        Route::post('/pelayanan-sdidtk/store', [PelayananSdidtkController::class, 'store'])->name('pelayanan-sdidtk.store');
        Route::get('/pelayanan-sdidtk/edit/{id}', [PelayananSdidtkController::class, 'edit'])->name('pelayanan-sdidtk.edit');
        Route::put('/pelayanan-sdidtk/update/{id}', [PelayananSdidtkController::class, 'update'])->name('pelayanan-sdidtk.update');
        Route::delete('/pelayanan-sdidtk/delete/{id}', [PelayananSdidtkController::class, 'destroy'])->name('pelayanan-sdidtk.delete');

        Route::get('/penyimpangan-pertumbuhan', [PenyimpanganPertumbuhanController::class, 'index'])->name('penyimpangan-pertumbuhan.index');
        Route::post('/penyimpangan-pertumbuhan/create', [PenyimpanganPertumbuhanController::class, 'create'])->name('penyimpangan-pertumbuhan.create');
        Route::post('/penyimpangan-pertumbuhan/store', [PenyimpanganPertumbuhanController::class, 'store'])->name('penyimpangan-pertumbuhan.store');
        Route::get('/penyimpangan-pertumbuhan/edit/{id}', [PenyimpanganPertumbuhanController::class, 'edit'])->name('penyimpangan-pertumbuhan.edit');
        Route::put('/penyimpangan-pertumbuhan/update/{id}', [PenyimpanganPertumbuhanController::class, 'update'])->name('penyimpangan-pertumbuhan.update');
        Route::delete('/penyimpangan-pertumbuhan/delete/{id}', [PenyimpanganPertumbuhanController::class, 'destroy'])->name('penyimpangan-pertumbuhan.delete');

        Route::get('/penyimpangan-perkembangan', [PenyimpanganPerkembanganController::class, 'index'])->name('penyimpangan-perkembangan.index');
        Route::post('/penyimpangan-perkembangan/create', [PenyimpanganPerkembanganController::class, 'create'])->name('penyimpangan-perkembangan.create');
        Route::post('/penyimpangan-perkembangan/store', [PenyimpanganPerkembanganController::class, 'store'])->name('penyimpangan-perkembangan.store');
        Route::get('/penyimpangan-perkembangan/edit/{id}', [PenyimpanganPerkembanganController::class, 'edit'])->name('penyimpangan-perkembangan.edit');
        Route::put('/penyimpangan-perkembangan/update/{id}', [PenyimpanganPerkembanganController::class, 'update'])->name('penyimpangan-perkembangan.update');
        Route::delete('/penyimpangan-perkembangan/delete/{id}', [PenyimpanganPerkembanganController::class, 'destroy'])->name('penyimpangan-perkembangan.delete');

        Route::get('/penyimpangan-emosional', [PenyimpanganEmosionalController::class, 'index'])->name('penyimpangan-emosional.index');
        Route::post('/penyimpangan-emosional/create', [PenyimpanganEmosionalController::class, 'create'])->name('penyimpangan-emosional.create');
        Route::post('/penyimpangan-emosional/store', [PenyimpanganEmosionalController::class, 'store'])->name('penyimpangan-emosional.store');
        Route::get('/penyimpangan-emosional/edit/{id}', [PenyimpanganEmosionalController::class, 'edit'])->name('penyimpangan-emosional.edit');
        Route::put('/penyimpangan-emosional/update/{id}', [PenyimpanganEmosionalController::class, 'update'])->name('penyimpangan-emosional.update');
        Route::delete('/penyimpangan-emosional/delete/{id}', [PenyimpanganEmosionalController::class, 'destroy'])->name('penyimpangan-emosional.delete');

        Route::get('/nasihat-anak', [NasihatAnakController::class, 'index'])->name('nasihat-anak.index');
        Route::post('/nasihat-anak/create', [NasihatAnakController::class, 'create'])->name('nasihat-anak.create');
        Route::post('/nasihat-anak/store', [NasihatAnakController::class, 'store'])->name('nasihat-anak.store');
        Route::get('/nasihat-anak/edit/{id}', [NasihatAnakController::class, 'edit'])->name('nasihat-anak.edit');
        Route::put('/nasihat-anak/update/{id}', [NasihatAnakController::class, 'update'])->name('nasihat-anak.update');
        Route::delete('/nasihat-anak/delete/{id}', [NasihatAnakController::class, 'destroy'])->name('nasihat-anak.delete');

        Route::get('/kapsul-anak', [KapsulAnakController::class, 'index'])->name('kapsul-anak.index');
        Route::post('/kapsul-anak/create', [KapsulAnakController::class, 'create'])->name('kapsul-anak.create');
        Route::post('/kapsul-anak/store', [KapsulAnakController::class, 'store'])->name('kapsul-anak.store');
        Route::get('/kapsul-anak/edit/{id}', [KapsulAnakController::class, 'edit'])->name('kapsul-anak.edit');
        Route::put('/kapsul-anak/update/{id}', [KapsulAnakController::class, 'update'])->name('kapsul-anak.update');
        Route::delete('/kapsul-anak/delete/{id}', [KapsulAnakController::class, 'destroy'])->name('kapsul-anak.delete');

        Route::get('/kms-perempuan', [KmsPerempuanController::class, 'index'])->name('kms-perempuan.index');
        Route::post('/kms-perempuan/create', [KmsPerempuanController::class, 'create'])->name('kms-perempuan.create');
        Route::post('/kms-perempuan/store', [KmsPerempuanController::class, 'store'])->name('kms-perempuan.store');
        Route::get('/kms-perempuan/edit/{id}', [KmsPerempuanController::class, 'edit'])->name('kms-perempuan.edit');
        Route::put('/kms-perempuan/update/{id}', [KmsPerempuanController::class, 'update'])->name('kms-perempuan.update');
        Route::delete('/kms-perempuan/delete/{id}', [KmsPerempuanController::class, 'destroy'])->name('kms-perempuan.delete');

        Route::get('/data-kms-perempuan', [DataKmsPerempuanController::class, 'index'])->name('data-kms-perempuan.index');
        Route::post('/data-kms-perempuan/create', [DataKmsPerempuanController::class, 'create'])->name('data-kms-perempuan.create');
        Route::post('/data-kms-perempuan/store', [DataKmsPerempuanController::class, 'store'])->name('data-kms-perempuan.store');
        Route::get('/data-kms-perempuan/edit/{id}', [DataKmsPerempuanController::class, 'edit'])->name('data-kms-perempuan.edit');
        Route::put('/data-kms-perempuan/update/{id}', [DataKmsPerempuanController::class, 'update'])->name('data-kms-perempuan.update');
        Route::delete('/data-kms-perempuan/delete/{id}', [DataKmsPerempuanController::class, 'destroy'])->name('data-kms-perempuan.delete');

        Route::get('/bb-u-perempuan', [BbUPerempuanController::class, 'index'])->name('bb-u-perempuan.index');
        Route::post('/bb-u-perempuan/create', [BbUPerempuanController::class, 'create'])->name('bb-u-perempuan.create');
        Route::post('/bb-u-perempuan/store', [BbUPerempuanController::class, 'store'])->name('bb-u-perempuan.store');
        Route::get('/bb-u-perempuan/edit/{id}', [BbUPerempuanController::class, 'edit'])->name('bb-u-perempuan.edit');
        Route::put('/bb-u-perempuan/update/{id}', [BbUPerempuanController::class, 'update'])->name('bb-u-perempuan.update');
        Route::delete('/bb-u-perempuan/delete/{id}', [BbUPerempuanController::class, 'destroy'])->name('bb-u-perempuan.delete');

        Route::get('/tb-u-perempuan', [TbUPerempuanController::class, 'index'])->name('tb-u-perempuan.index');
        Route::post('/tb-u-perempuan/create', [TbUPerempuanController::class, 'create'])->name('tb-u-perempuan.create');
        Route::post('/tb-u-perempuan/store', [TbUPerempuanController::class, 'store'])->name('tb-u-perempuan.store');
        Route::get('/tb-u-perempuan/edit/{id}', [TbUPerempuanController::class, 'edit'])->name('tb-u-perempuan.edit');
        Route::put('/tb-u-perempuan/update/{id}', [TbUPerempuanController::class, 'update'])->name('tb-u-perempuan.update');
        Route::delete('/tb-u-perempuan/delete/{id}', [TbUPerempuanController::class, 'destroy'])->name('tb-u-perempuan.delete');

        Route::get('/bb-tb-perempuan', [BbTbPerempuanController::class, 'index'])->name('bb-tb-perempuan.index');
        Route::post('/bb-tb-perempuan/create', [BbTbPerempuanController::class, 'create'])->name('bb-tb-perempuan.create');
        Route::post('/bb-tb-perempuan/store', [BbTbPerempuanController::class, 'store'])->name('bb-tb-perempuan.store');
        Route::get('/bb-tb-perempuan/edit/{id}', [BbTbPerempuanController::class, 'edit'])->name('bb-tb-perempuan.edit');
        Route::put('/bb-tb-perempuan/update/{id}', [BbTbPerempuanController::class, 'update'])->name('bb-tb-perempuan.update');
        Route::delete('/bb-tb-perempuan/delete/{id}', [BbTbPerempuanController::class, 'destroy'])->name('bb-tb-perempuan.delete');

        Route::get('/lingkar-kepala-perempuan', [LingkarKepalaPerempuanController::class, 'index'])->name('lingkar-kepala-perempuan.index');
        Route::post('/lingkar-kepala-perempuan/create', [LingkarKepalaPerempuanController::class, 'create'])->name('lingkar-kepala-perempuan.create');
        Route::post('/lingkar-kepala-perempuan/store', [LingkarKepalaPerempuanController::class, 'store'])->name('lingkar-kepala-perempuan.store');
        Route::get('/lingkar-kepala-perempuan/edit/{id}', [LingkarKepalaPerempuanController::class, 'edit'])->name('lingkar-kepala-perempuan.edit');
        Route::put('/lingkar-kepala-perempuan/update/{id}', [LingkarKepalaPerempuanController::class, 'update'])->name('lingkar-kepala-perempuan.update');
        Route::delete('/lingkar-kepala-perempuan/delete/{id}', [LingkarKepalaPerempuanController::class, 'destroy'])->name('lingkar-kepala-perempuan.delete');

        Route::get('/kms-laki', [KmsLakiController::class, 'index'])->name('kms-laki.index');
        Route::post('/kms-laki/create', [KmsLakiController::class, 'create'])->name('kms-laki.create');
        Route::post('/kms-laki/store', [KmsLakiController::class, 'store'])->name('kms-laki.store');
        Route::get('/kms-laki/edit/{id}', [KmsLakiController::class, 'edit'])->name('kms-laki.edit');
        Route::put('/kms-laki/update/{id}', [KmsLakiController::class, 'update'])->name('kms-laki.update');
        Route::delete('/kms-laki/delete/{id}', [KmsLakiController::class, 'destroy'])->name('kms-laki.delete');

        Route::get('/data-kms-laki', [DataKmsLakiController::class, 'index'])->name('data-kms-laki.index');
        Route::post('/data-kms-laki/create', [DataKmsLakiController::class, 'create'])->name('data-kms-laki.create');
        Route::post('/data-kms-laki/store', [DataKmsLakiController::class, 'store'])->name('data-kms-laki.store');
        Route::get('/data-kms-laki/edit/{id}', [DataKmsLakiController::class, 'edit'])->name('data-kms-laki.edit');
        Route::put('/data-kms-laki/update/{id}', [DataKmsLakiController::class, 'update'])->name('data-kms-laki.update');
        Route::delete('/data-kms-laki/delete/{id}', [DataKmsLakiController::class, 'destroy'])->name('data-kms-laki.delete');

        Route::get('/bb-u-laki', [BbULakiController::class, 'index'])->name('bb-u-laki.index');
        Route::post('/bb-u-laki/create', [BbULakiController::class, 'create'])->name('bb-u-laki.create');
        Route::post('/bb-u-laki/store', [BbULakiController::class, 'store'])->name('bb-u-laki.store');
        Route::get('/bb-u-laki/edit/{id}', [BbULakiController::class, 'edit'])->name('bb-u-laki.edit');
        Route::put('/bb-u-laki/update/{id}', [BbULakiController::class, 'update'])->name('bb-u-laki.update');
        Route::delete('/bb-u-laki/delete/{id}', [BbULakiController::class, 'destroy'])->name('bb-u-laki.delete');

        Route::get('/tb-u-laki', [TbULakiController::class, 'index'])->name('tb-u-laki.index');
        Route::post('/tb-u-laki/create', [TbULakiController::class, 'create'])->name('tb-u-laki.create');
        Route::post('/tb-u-laki/store', [TbULakiController::class, 'store'])->name('tb-u-laki.store');
        Route::get('/tb-u-laki/edit/{id}', [TbULakiController::class, 'edit'])->name('tb-u-laki.edit');
        Route::put('/tb-u-laki/update/{id}', [TbULakiController::class, 'update'])->name('tb-u-laki.update');
        Route::delete('/tb-u-laki/delete/{id}', [TbULakiController::class, 'destroy'])->name('tb-u-laki.delete');

        Route::get('/bb-tb-laki', [BbTbLakiController::class, 'index'])->name('bb-tb-laki.index');
        Route::post('/bb-tb-laki/create', [BbTbLakiController::class, 'create'])->name('bb-tb-laki.create');
        Route::post('/bb-tb-laki/store', [BbTbLakiController::class, 'store'])->name('bb-tb-laki.store');
        Route::get('/bb-tb-laki/edit/{id}', [BbTbLakiController::class, 'edit'])->name('bb-tb-laki.edit');
        Route::put('/bb-tb-laki/update/{id}', [BbTbLakiController::class, 'update'])->name('bb-tb-laki.update');
        Route::delete('/bb-tb-laki/delete/{id}', [BbTbLakiController::class, 'destroy'])->name('bb-tb-laki.delete');

        Route::get('/lingkar-kepala-laki', [LingkarKepalaLakiController::class, 'index'])->name('lingkar-kepala-laki.index');
        Route::post('/lingkar-kepala-laki/create', [LingkarKepalaLakiController::class, 'create'])->name('lingkar-kepala-laki.create');
        Route::post('/lingkar-kepala-laki/store', [LingkarKepalaLakiController::class, 'store'])->name('lingkar-kepala-laki.store');
        Route::get('/lingkar-kepala-laki/edit/{id}', [LingkarKepalaLakiController::class, 'edit'])->name('lingkar-kepala-laki.edit');
        Route::put('/lingkar-kepala-laki/update/{id}', [LingkarKepalaLakiController::class, 'update'])->name('lingkar-kepala-laki.update');
        Route::delete('/lingkar-kepala-laki/delete/{id}', [LingkarKepalaLakiController::class, 'destroy'])->name('lingkar-kepala-laki.delete');

        Route::get('/imt-perempuan', [ImtPerempuanController::class, 'index'])->name('imt-perempuan.index');
        Route::post('/imt-perempuan/create', [ImtPerempuanController::class, 'create'])->name('imt-perempuan.create');
        Route::post('/imt-perempuan/store', [ImtPerempuanController::class, 'store'])->name('imt-perempuan.store');
        Route::get('/imt-perempuan/edit/{id}', [ImtPerempuanController::class, 'edit'])->name('imt-perempuan.edit');
        Route::put('/imt-perempuan/update/{id}', [ImtPerempuanController::class, 'update'])->name('imt-perempuan.update');
        Route::delete('/imt-perempuan/delete/{id}', [ImtPerempuanController::class, 'destroy'])->name('imt-perempuan.delete');

        Route::get('/imt-laki', [ImtLakiController::class, 'index'])->name('imt-laki.index');
        Route::post('/imt-laki/create', [ImtLakiController::class, 'create'])->name('imt-laki.create');
        Route::post('/imt-laki/store', [ImtLakiController::class, 'store'])->name('imt-laki.store');
        Route::get('/imt-laki/edit/{id}', [ImtLakiController::class, 'edit'])->name('imt-laki.edit');
        Route::put('/imt-laki/update/{id}', [ImtLakiController::class, 'update'])->name('imt-laki.update');
        Route::delete('/imt-laki/delete/{id}', [ImtLakiController::class, 'destroy'])->name('imt-laki.delete');

        Route::get('/kesehatan-gigi', [KesehatanGigiController::class, 'index'])->name('kesehatan-gigi.index');
        Route::post('/kesehatan-gigi/create', [KesehatanGigiController::class, 'create'])->name('kesehatan-gigi.create');
        Route::post('/kesehatan-gigi/store', [KesehatanGigiController::class, 'store'])->name('kesehatan-gigi.store');
        Route::get('/kesehatan-gigi/edit/{id}', [KesehatanGigiController::class, 'edit'])->name('kesehatan-gigi.edit');
        Route::put('/kesehatan-gigi/update/{id}', [KesehatanGigiController::class, 'update'])->name('kesehatan-gigi.update');
        Route::delete('/kesehatan-gigi/delete/{id}', [KesehatanGigiController::class, 'destroy'])->name('kesehatan-gigi.delete');

        Route::get('/data-kesehatan-gigi', [DataKesehatanGigiController::class, 'index'])->name('data-kesehatan-gigi.index');
        Route::post('/data-kesehatan-gigi/create', [DataKesehatanGigiController::class, 'create'])->name('data-kesehatan-gigi.create');
        Route::post('/data-kesehatan-gigi/store', [DataKesehatanGigiController::class, 'store'])->name('data-kesehatan-gigi.store');
        Route::get('/data-kesehatan-gigi/edit/{id}', [DataKesehatanGigiController::class, 'edit'])->name('data-kesehatan-gigi.edit');
        Route::put('/data-kesehatan-gigi/update/{id}', [DataKesehatanGigiController::class, 'update'])->name('data-kesehatan-gigi.update');
        Route::delete('/data-kesehatan-gigi/delete/{id}', [DataKesehatanGigiController::class, 'destroy'])->name('data-kesehatan-gigi.delete');

        Route::get('/ringkasan-mtbs', [RingkasanMtbsController::class, 'index'])->name('ringkasan-mtbs.index');
        Route::post('/ringkasan-mtbs/create', [RingkasanMtbsController::class, 'create'])->name('ringkasan-mtbs.create');
        Route::post('/ringkasan-mtbs/store', [RingkasanMtbsController::class, 'store'])->name('ringkasan-mtbs.store');
        Route::get('/ringkasan-mtbs/edit/{id}', [RingkasanMtbsController::class, 'edit'])->name('ringkasan-mtbs.edit');
        Route::put('/ringkasan-mtbs/update/{id}', [RingkasanMtbsController::class, 'update'])->name('ringkasan-mtbs.update');
        Route::delete('/ringkasan-mtbs/delete/{id}', [RingkasanMtbsController::class, 'destroy'])->name('ringkasan-mtbs.delete');

        Route::get('/ringkasan-pelayanan-dokter', [RingkasanPelayananDokterController::class, 'index'])->name('ringkasan-pelayanan-dokter.index');
        Route::post('/ringkasan-pelayanan-dokter/create', [RingkasanPelayananDokterController::class, 'create'])->name('ringkasan-pelayanan-dokter.create');
        Route::post('/ringkasan-pelayanan-dokter/store', [RingkasanPelayananDokterController::class, 'store'])->name('ringkasan-pelayanan-dokter.store');
        Route::get('/ringkasan-pelayanan-dokter/edit/{id}', [RingkasanPelayananDokterController::class, 'edit'])->name('ringkasan-pelayanan-dokter.edit');
        Route::put('/ringkasan-pelayanan-dokter/update/{id}', [RingkasanPelayananDokterController::class, 'update'])->name('ringkasan-pelayanan-dokter.update');
        Route::delete('/ringkasan-pelayanan-dokter/delete/{id}', [RingkasanPelayananDokterController::class, 'destroy'])->name('ringkasan-pelayanan-dokter.delete');

        Route::get('/rujukan-anak', [RujukanAnakController::class, 'index'])->name('rujukan-anak.index');
        Route::post('/rujukan-anak/create', [RujukanAnakController::class, 'create'])->name('rujukan-anak.create');
        Route::post('/rujukan-anak/store', [RujukanAnakController::class, 'store'])->name('rujukan-anak.store');
        Route::get('/rujukan-anak/edit/{id}', [RujukanAnakController::class, 'edit'])->name('rujukan-anak.edit');
        Route::put('/rujukan-anak/update/{id}', [RujukanAnakController::class, 'update'])->name('rujukan-anak.update');
        Route::delete('/rujukan-anak/delete/{id}', [RujukanAnakController::class, 'destroy'])->name('rujukan-anak.delete');
    });
});

Route::get('/grafik-berat-badan-umur-laki', function () {
    $data = BbULaki::select('bulan', 'tahun', 'bb')
        ->where('id_anak', 1)
        ->orderBy('tahun')
        ->orderBy('bulan')
        ->get();

    $labels = [];
    $bbData = [];

    $startYear = null;

    foreach ($data as $item) {
        if ($startYear === null) {
            $startYear = $item->tahun;
        }

        $usiaBulan = ($item->tahun - $startYear) * 12 + $item->bulan;

        if ($usiaBulan == 12) {
            $labels[] = "1 tahun";
        } elseif ($usiaBulan == 24) {
            $labels[] = "2 tahun";
        } else {
            $labels[] = $usiaBulan . " bln";
        }

        $bbData[] = $item->bb;
    }

    $earnings = [
        "labels" => $labels,
        "data" => $bbData
    ];

    return view('admin.pages.template-graph', [
        'earnings' => $earnings
    ]);
});

Route::get('/grafik-tinggi-badan-umur-laki', function () {
    $data = TbULaki::select('bulan', 'tahun', 'tb')
        ->where('id_anak', 1)
        ->orderBy('tahun')
        ->orderBy('bulan')
        ->get();

    $labels = [];
    $tbData = [];

    $startYear = null;

    foreach ($data as $item) {
        if ($startYear === null) {
            $startYear = $item->tahun;
        }

        $usiaBulan = ($item->tahun - $startYear) * 12 + $item->bulan;

        if ($usiaBulan == 12) {
            $labels[] = "1 tahun";
        } elseif ($usiaBulan == 24) {
            $labels[] = "2 tahun";
        } else {
            $labels[] = $usiaBulan . " bln";
        }

        $tbData[] = $item->tb;
    }

    $graph = [
        "labels" => $labels,
        "data" => $tbData
    ];

    return view('admin.pages.template-graph', [
        'earnings' => $graph
    ]);
});

Route::get('/grafik-bb-tb-laki', function () {
    $data = BbTbLaki::select('bb', 'tb')
        ->where('id_anak', 1)
        ->orderBy('tb')
        ->get();

    $labels = [];
    $bbData = [];

    foreach ($data as $item) {
        $labels[] = $item->tb . ' cm';
        $bbData[] = $item->bb;
    }

    $graph = [
        "labels" => $labels,
        "data" => $bbData
    ];

    return view('admin.pages.template-graph', [
        'earnings' => $graph
    ]);
});

Route::get('/grafik-lingkar-laki', function () {
    $data = LingkarKepalaLaki::select('bulan', 'tahun', 'lingkar_kepala')
        ->where('id_anak', 1)
        ->orderBy('tahun')
        ->orderBy('bulan')
        ->get();

    $labels = [];
    $lkData = [];

    $startYear = null;

    foreach ($data as $item) {
        if ($startYear === null) {
            $startYear = $item->tahun;
        }

        $usiaBulan = ($item->tahun - $startYear) * 12 + $item->bulan;

        // Menambahkan label umur dalam bulan dan tahun
        if ($usiaBulan == 12) {
            $labels[] = "1 tahun";
        } elseif ($usiaBulan == 24) {
            $labels[] = "2 tahun";
        } else {
            $labels[] = $usiaBulan . " bln";
        }

        $lkData[] = $item->lingkar_kepala;
    }

    $graph = [
        "labels" => $labels,
        "data" => $lkData
    ];

    return view('admin.pages.template-graph', [
        'earnings' => $graph
    ]);
});

Route::get('/grafik-bb-u-pr', function () {
    $data = BbUPerempuan::select('bulan', 'tahun', 'bb')
        ->where('id_anak', 1)
        ->orderBy('tahun')
        ->orderBy('bulan')
        ->get();

    $labels = [];
    $bbData = [];

    $startYear = null;

    foreach ($data as $item) {
        if ($startYear === null) {
            $startYear = $item->tahun;
        }

        $usiaBulan = ($item->tahun - $startYear) * 12 + $item->bulan;

        if ($usiaBulan == 12) {
            $labels[] = "1 tahun";
        } elseif ($usiaBulan == 24) {
            $labels[] = "2 tahun";
        } else {
            $labels[] = $usiaBulan . " bln";
        }

        $bbData[] = $item->bb;
    }

    $earnings = [
        "labels" => $labels,
        "data" => $bbData
    ];

    return view('admin.pages.template-graph', [
        'earnings' => $earnings
    ]);
});

Route::get('/grafik-tb-u-pr', function () {
    $data = TbUPerempuan::select('bulan', 'tahun', 'tb')
        ->where('id_anak', 1)
        ->orderBy('tahun')
        ->orderBy('bulan')
        ->get();

    $labels = [];
    $tbData = [];

    $startYear = null;

    foreach ($data as $item) {
        if ($startYear === null) {
            $startYear = $item->tahun;
        }

        $usiaBulan = ($item->tahun - $startYear) * 12 + $item->bulan;

        if ($usiaBulan == 12) {
            $labels[] = "1 tahun";
        } elseif ($usiaBulan == 24) {
            $labels[] = "2 tahun";
        } else {
            $labels[] = $usiaBulan . " bln";
        }

        $tbData[] = $item->tb;
    }

    $graph = [
        "labels" => $labels,
        "data" => $tbData
    ];

    return view('admin.pages.template-graph', [
        'earnings' => $graph
    ]);
});

Route::get('/grafik-bb-tb-pr', function () {
    $data = BbTbPerempuan::select('bb', 'tb')
        ->where('id_anak', 1)
        ->orderBy('tb')
        ->get();

    $labels = [];
    $bbData = [];

    foreach ($data as $item) {
        $labels[] = $item->tb . ' cm';
        $bbData[] = $item->bb;
    }

    $graph = [
        "labels" => $labels,
        "data" => $bbData
    ];

    return view('admin.pages.template-graph', [
        'earnings' => $graph
    ]);
});

Route::get('/grafik-lingkar-pr', function () {
    $data = LingkarKepalaPerempuan::select('bulan', 'tahun', 'lingkar_kepala')
        ->where('id_anak', 1)
        ->orderBy('tahun')
        ->orderBy('bulan')
        ->get();

    $labels = [];
    $lkData = [];

    $startYear = null;

    foreach ($data as $item) {
        if ($startYear === null) {
            $startYear = $item->tahun;
        }

        $usiaBulan = ($item->tahun - $startYear) * 12 + $item->bulan;

        // Menambahkan label umur dalam bulan dan tahun
        if ($usiaBulan == 12) {
            $labels[] = "1 tahun";
        } elseif ($usiaBulan == 24) {
            $labels[] = "2 tahun";
        } else {
            $labels[] = $usiaBulan . " bln";
        }

        $lkData[] = $item->lingkar_kepala;
    }

    $graph = [
        "labels" => $labels,
        "data" => $lkData
    ];

    return view('admin.pages.template-graph', [
        'earnings' => $graph
    ]);
});

Route::get('/grafik-imt-laki', function () {
    $data = ImtLaki::select('imt', 'bulan')
        ->where('id_anak', 1)
        ->orderBy('bulan')
        ->get();

    $labels = [];
    $imtData = [];

    foreach ($data as $item) {
        $labels[] = $item->bulan . ' bln';
        $imtData[] = $item->imt;
    }

    $graph = [
        "labels" => $labels,
        "data" => $imtData
    ];

    return view('admin.pages.template-graph', [
        'earnings' => $graph
    ]);
});

Route::get('/grafik-imt-pr', function () {
    $data = ImtPerempuan::select('imt', 'bulan')
        ->where('id_anak', 1)
        ->orderBy('bulan')
        ->get();

    $labels = [];
    $imtData = [];

    foreach ($data as $item) {
        $labels[] = $item->bulan . ' bln';
        $imtData[] = $item->imt;
    }

    $graph = [
        "labels" => $labels,
        "data" => $imtData
    ];

    return view('admin.pages.template-graph', [
        'earnings' => $graph
    ]);
});

Route::get('/coba-grafik', function () {
    return view('admin.pages.coba-grafik');
});

require __DIR__ . '/auth.php';
