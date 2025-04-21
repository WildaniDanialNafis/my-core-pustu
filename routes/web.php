<?php

use App\Http\Controllers\AmanatDarahController;
use App\Http\Controllers\AmanatKendaraanController;
use App\Http\Controllers\AmanatPenolongPersalinanController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\BeratBadanBumilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluasiKehamilanController;
use App\Http\Controllers\EvaluasiKesehatanBumilController;
use App\Http\Controllers\IbuController;
use App\Http\Controllers\IdentitasAnakController;
use App\Http\Controllers\ImunisasiTController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\Kesehatan1Controller;
use App\Http\Controllers\Kesehatan2Controller;
use App\Http\Controllers\KesehatanBersalinController;
use App\Http\Controllers\KesehatanNifasController;
use App\Http\Controllers\KondisiKesehatanBumilController;
use App\Http\Controllers\KontrolTtdController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenyambutPersalinanController;
use App\Http\Controllers\MinumTtdController;
use App\Http\Controllers\PemeriksaanFisikTri1Controller;
use App\Http\Controllers\PemeriksaanFisikTri3Controller;
use App\Http\Controllers\PemeriksaanKhususController;
use App\Http\Controllers\PemeriksaanLaboratoriumTri1Controller;
use App\Http\Controllers\PemeriksaanLaboratoriumTri3Controller;
use App\Http\Controllers\PemeriksaanTrimester1Controller;
use App\Http\Controllers\PemeriksaanTrimester3Controller;
use App\Http\Controllers\PreeklampsiaAnamnesisController;
use App\Http\Controllers\PreeklampsiaFisikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RingkasanKesehatanController;
use App\Http\Controllers\RingkasanKesimpulanNifasController;
use App\Http\Controllers\RingkasanNifasController;
use App\Http\Controllers\RiwayatKehamilanController;
use App\Http\Controllers\RiwayatKesehatanBumilController;
use App\Http\Controllers\RiwayatPenyakitKeluargaController;
use App\Http\Controllers\RiwayatPerilakuBerisikoController;
use App\Http\Controllers\RujukanController;
use App\Http\Controllers\SkriningPreeklampsiaController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\UsgTri1Controller;
use App\Http\Controllers\UsgTri3Controller;
use App\Http\Controllers\WaliController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/coba-dashboard', [DashboardController::class, 'create'])->name('dashboard.create');

Route::get('/coba-login', [LoginController::class, 'create'])->name('login.create');
Route::post('/coba-login', [LoginController::class, 'store'])->name('login.store');

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

Route::get('/coba-tables', [TablesController::class, 'create'])->name('tables.create');
Route::post('/coba-tables', [TablesController::class, 'store'])->name('tables.store');
Route::get('/coba-tables/edit/{id}', [TablesController::class, 'edit'])->name('tables.edit');
Route::put('/coba-tables/update/{id}', [TablesController::class, 'update'])->name('tables.update');
Route::delete('/coba-tables/delete/{id}', [TablesController::class, 'destroy'])->name('tables.delete');
Route::get('/users/data', [TablesController::class, 'getUsers'])->name('users.data');

Route::get('/ibu', [IbuController::class, 'index'])->name('ibu.index');
Route::get('/ibu/create', [IbuController::class, 'create'])->name('ibu.create');
Route::post('/ibu/store', [IbuController::class, 'store'])->name('ibu.store');
Route::get('/ibu/edit/{id}', [IbuController::class, 'edit'])->name('ibu.edit');
Route::put('/ibu/update/{id}', [IbuController::class, 'update'])->name('ibu.update');
Route::delete('/ibu/delete/{id}', [IbuController::class, 'destroy'])->name('ibu.delete');

Route::get('/keluarga', [KeluargaController::class, 'index'])->name('keluarga.index');
Route::get('/keluarga/create', [KeluargaController::class, 'create'])->name('keluarga.create');
Route::post('/keluarga/store', [KeluargaController::class, 'store'])->name('keluarga.store');
Route::get('/keluarga/edit/{id}', [KeluargaController::class, 'edit'])->name('keluarga.edit');
Route::put('/keluarga/update/{id}', [KeluargaController::class, 'update'])->name('keluarga.update');
Route::delete('/keluarga/delete/{id}', [KeluargaController::class, 'destroy'])->name('keluarga.delete');

Route::get('/kesehatan1', [Kesehatan1Controller::class, 'index'])->name('kesehatan1.index');
Route::get('/kesehatan1/create', [Kesehatan1Controller::class, 'create'])->name('kesehatan1.create');
Route::post('/kesehatan1/store', [Kesehatan1Controller::class, 'store'])->name('kesehatan1.store');
Route::get('/kesehatan1/edit/{id}', [Kesehatan1Controller::class, 'edit'])->name('kesehatan1.edit');
Route::put('/kesehatan1/update/{id}', [Kesehatan1Controller::class, 'update'])->name('kesehatan1.update');
Route::delete('/kesehatan1/delete/{id}', [Kesehatan1Controller::class, 'destroy'])->name('kesehatan1.delete');

Route::get('/kesehatan2', [Kesehatan2Controller::class, 'index'])->name('kesehatan2.index');
Route::get('/kesehatan2/create', [Kesehatan2Controller::class, 'create'])->name('kesehatan2.create');
Route::post('/kesehatan2/store', [Kesehatan2Controller::class, 'store'])->name('kesehatan2.store');
Route::get('/kesehatan2/edit/{id}', [Kesehatan2Controller::class, 'edit'])->name('kesehatan2.edit');
Route::put('/kesehatan2/update/{id}', [Kesehatan2Controller::class, 'update'])->name('kesehatan2.update');
Route::delete('/kesehatan2/delete/{id}', [Kesehatan2Controller::class, 'destroy'])->name('kesehatan2.delete');

Route::get('/kesehatan-bersalin', [KesehatanBersalinController::class, 'index'])->name('kesehatan-bersalin.index');
Route::get('/kesehatan-bersalin/create', [KesehatanBersalinController::class, 'create'])->name('kesehatan-bersalin.create');
Route::post('/kesehatan-bersalin/store', [KesehatanBersalinController::class, 'store'])->name('kesehatan-bersalin.store');
Route::get('/kesehatan-bersalin/edit/{id}', [KesehatanBersalinController::class, 'edit'])->name('kesehatan-bersalin.edit');
Route::put('/kesehatan-bersalin/update/{id}', [KesehatanBersalinController::class, 'update'])->name('kesehatan-bersalin.update');
Route::delete('/kesehatan-bersalin/delete/{id}', [KesehatanBersalinController::class, 'destroy'])->name('kesehatan-bersalin.delete');

Route::get('/kesehatan-nifas', [KesehatanNifasController::class, 'index'])->name('kesehatan-nifas.index');
Route::get('/kesehatan-nifas/create', [KesehatanNifasController::class, 'create'])->name('kesehatan-nifas.create');
Route::post('/kesehatan-nifas/store', [KesehatanNifasController::class, 'store'])->name('kesehatan-nifas.store');
Route::get('/kesehatan-nifas/edit/{id}', [KesehatanNifasController::class, 'edit'])->name('kesehatan-nifas.edit');
Route::put('/kesehatan-nifas/update/{id}', [KesehatanNifasController::class, 'update'])->name('kesehatan-nifas.update');
Route::delete('/kesehatan-nifas/delete/{id}', [KesehatanNifasController::class, 'destroy'])->name('kesehatan-nifas.delete');

Route::get('/kontrol-ttd', [KontrolTtdController::class, 'index'])->name('kontrol-ttd.index');
Route::get('/kontrol-ttd/create', [KontrolTtdController::class, 'create'])->name('kontrol-ttd.create');
Route::post('/kontrol-ttd/store', [KontrolTtdController::class, 'store'])->name('kontrol-ttd.store');
Route::get('/kontrol-ttd/edit/{id}', [KontrolTtdController::class, 'edit'])->name('kontrol-ttd.edit');
Route::put('/kontrol-ttd/update/{id}', [KontrolTtdController::class, 'update'])->name('kontrol-ttd.update');
Route::delete('/kontrol-ttd/delete/{id}', [KontrolTtdController::class, 'destroy'])->name('kontrol-ttd.delete');

Route::get('/minum-ttd', [MinumTtdController::class, 'index'])->name('minum-ttd.index');
Route::get('/minum-ttd/create', [MinumTtdController::class, 'create'])->name('minum-ttd.create');
Route::post('/minum-ttd/store', [MinumTtdController::class, 'store'])->name('minum-ttd.store');
Route::get('/minum-ttd/edit/{id}', [MinumTtdController::class, 'edit'])->name('minum-ttd.edit');
Route::put('/minum-ttd/update/{id}', [MinumTtdController::class, 'update'])->name('minum-ttd.update');
Route::delete('/minum-ttd/delete/{id}', [MinumTtdController::class, 'destroy'])->name('minum-ttd.delete');

Route::get('/menyambut-persalinan', [MenyambutPersalinanController::class, 'index'])->name('menyambut-persalinan.index');
Route::get('/menyambut-persalinan/create', [MenyambutPersalinanController::class, 'create'])->name('menyambut-persalinan.create');
Route::post('/menyambut-persalinan/store', [MenyambutPersalinanController::class, 'store'])->name('menyambut-persalinan.store');
Route::get('/menyambut-persalinan/edit/{id}', [MenyambutPersalinanController::class, 'edit'])->name('menyambut-persalinan.edit');
Route::put('/menyambut-persalinan/update/{id}', [MenyambutPersalinanController::class, 'update'])->name('menyambut-persalinan.update');
Route::delete('/menyambut-persalinan/delete/{id}', [MenyambutPersalinanController::class, 'destroy'])->name('menyambut-persalinan.delete');

Route::get('/amanat-penolong-persalinan', [AmanatPenolongPersalinanController::class, 'index'])->name('amanat-penolong-persalinan.index');
Route::get('/amanat-penolong-persalinan/create', [AmanatPenolongPersalinanController::class, 'create'])->name('amanat-penolong-persalinan.create');
Route::post('/amanat-penolong-persalinan/store', [AmanatPenolongPersalinanController::class, 'store'])->name('amanat-penolong-persalinan.store');
Route::get('/amanat-penolong-persalinan/edit/{id}', [AmanatPenolongPersalinanController::class, 'edit'])->name('amanat-penolong-persalinan.edit');
Route::put('/amanat-penolong-persalinan/update/{id}', [AmanatPenolongPersalinanController::class, 'update'])->name('amanat-penolong-persalinan.update');
Route::delete('/amanat-penolong-persalinan/delete/{id}', [AmanatPenolongPersalinanController::class, 'destroy'])->name('amanat-penolong-persalinan.delete');

Route::get('/amanat-kendaraan', [AmanatKendaraanController::class, 'index'])->name('amanat-kendaraan.index');
Route::get('/amanat-kendaraan/create', [AmanatKendaraanController::class, 'create'])->name('amanat-kendaraan.create');
Route::post('/amanat-kendaraan/store', [AmanatKendaraanController::class, 'store'])->name('amanat-kendaraan.store');
Route::get('/amanat-kendaraan/edit/{id}', [AmanatKendaraanController::class, 'edit'])->name('amanat-kendaraan.edit');
Route::put('/amanat-kendaraan/update/{id}', [AmanatKendaraanController::class, 'update'])->name('amanat-kendaraan.update');
Route::delete('/amanat-kendaraan/delete/{id}', [AmanatKendaraanController::class, 'destroy'])->name('amanat-kendaraan.delete');

Route::get('/amanat-darah', [AmanatDarahController::class, 'index'])->name('amanat-darah.index');
Route::get('/amanat-darah/create', [AmanatDarahController::class, 'create'])->name('amanat-darah.create');
Route::post('/amanat-darah/store', [AmanatDarahController::class, 'store'])->name('amanat-darah.store');
Route::get('/amanat-darah/edit/{id}', [AmanatDarahController::class, 'edit'])->name('amanat-darah.edit');
Route::put('/amanat-darah/update/{id}', [AmanatDarahController::class, 'update'])->name('amanat-darah.update');
Route::delete('/amanat-darah/delete/{id}', [AmanatDarahController::class, 'destroy'])->name('amanat-darah.delete');

Route::get('/evaluasi-kesehatan-bumil', [EvaluasiKesehatanBumilController::class, 'index'])->name('evaluasi-kesehatan-bumil.index');
Route::get('/evaluasi-kesehatan-bumil/create', [EvaluasiKesehatanBumilController::class, 'create'])->name('evaluasi-kesehatan-bumil.create');
Route::post('/evaluasi-kesehatan-bumil/store', [EvaluasiKesehatanBumilController::class, 'store'])->name('evaluasi-kesehatan-bumil.store');
Route::get('/evaluasi-kesehatan-bumil/edit/{id}', [EvaluasiKesehatanBumilController::class, 'edit'])->name('evaluasi-kesehatan-bumil.edit');
Route::put('/evaluasi-kesehatan-bumil/update/{id}', [EvaluasiKesehatanBumilController::class, 'update'])->name('evaluasi-kesehatan-bumil.update');
Route::delete('/evaluasi-kesehatan-bumil/delete/{id}', [EvaluasiKesehatanBumilController::class, 'destroy'])->name('evaluasi-kesehatan-bumil.delete');

Route::get('/kondisi-kesehatan-bumil', [KondisiKesehatanBumilController::class, 'index'])->name('kondisi-kesehatan-bumil.index');
Route::get('/kondisi-kesehatan-bumil/create', [KondisiKesehatanBumilController::class, 'create'])->name('kondisi-kesehatan-bumil.create');
Route::post('/kondisi-kesehatan-bumil/store', [KondisiKesehatanBumilController::class, 'store'])->name('kondisi-kese
hatan-bumil.store');
Route::get('/kondisi-kesehatan-bumil/edit/{id}', [KondisiKesehatanBumilController::class, 'edit'])->name('kondisi-kesehatan-bumil.edit');
Route::put('/kondisi-kesehatan-bumil/update/{id}', [KondisiKesehatanBumilController::class, 'update'])->name('kondisi-kesehatan-bumil.update');
Route::delete('/kondisi-kesehatan-bumil/delete/{id}', [KondisiKesehatanBumilController::class, 'destroy'])->name('kondisi-kesehatan-bumil.delete');

Route::get('/imunisasi-t', [ImunisasiTController::class, 'index'])->name('imunisasi-t.index');
Route::get('/imunisasi-t/create', [ImunisasiTController::class, 'create'])->name('imunisasi-t.create');
Route::post('/imunisasi-t/store', [ImunisasiTController::class, 'store'])->name('imunisasi-t.store');
Route::get('/imunisasi-t/edit/{id}', [ImunisasiTController::class, 'edit'])->name('imunisasi-t.edit');
Route::put('/imunisasi-t/update/{id}', [ImunisasiTController::class, 'update'])->name('imunisasi-t.update');
Route::delete('/imunisasi-t/delete/{id}', [ImunisasiTController::class, 'destroy'])->name('imunisasi-t.delete');

Route::get('/riwayat-kesehatan-bumil', [RiwayatKesehatanBumilController::class, 'index'])->name('riwayat-kesehatan-bumil.index');
Route::get('/riwayat-kesehatan-bumil/create', [RiwayatKesehatanBumilController::class, 'create'])->name('riwayat-kesehatan-bumil.create');
Route::post('/riwayat-kesehatan-bumil/store', [RiwayatKesehatanBumilController::class, 'store'])->name('riwayat-kesehatan-bumil.store');
Route::get('/riwayat-kesehatan-bumil/edit/{id}', [RiwayatKesehatanBumilController::class, 'edit'])->name('riwayat-kesehatan-bumil.edit');
Route::put('/riwayat-kesehatan-bumil/update/{id}', [RiwayatKesehatanBumilController::class, 'update'])->name('riwayat-kesehatan-bumil.update');
Route::delete('/riwayat-kesehatan-bumil/delete/{id}', [RiwayatKesehatanBumilController::class, 'destroy'])->name('riwayat-kesehatan-bumil.delete');

Route::get('/riwayat-perilaku-berisiko', [RiwayatPerilakuBerisikoController::class, 'index'])->name('riwayat-perilaku-berisiko.index');
Route::get('/riwayat-perilaku-berisiko/create', [RiwayatPerilakuBerisikoController::class, 'create'])->name('riwayat-perilaku-berisiko.create');
Route::post('/riwayat-perilaku-berisiko/store', [RiwayatPerilakuBerisikoController::class, 'store'])->name('riwayat-perilaku-berisiko.store');
Route::get('/riwayat-perilaku-berisiko/edit/{id}', [RiwayatPerilakuBerisikoController::class, 'edit'])->name('riwayat-perilaku-berisiko.edit');
Route::put('/riwayat-perilaku-berisiko/update/{id}', [RiwayatPerilakuBerisikoController::class, 'update'])->name('riwayat-perilaku-berisiko.update');
Route::delete('/riwayat-perilaku-berisiko/delete/{id}', [RiwayatPerilakuBerisikoController::class, 'destroy'])->name('riwayat-perilaku-berisiko.delete');

Route::get('/riwayat-kehamilan', [RiwayatKehamilanController::class, 'index'])->name('riwayat-kehamilan.index');
Route::get('/riwayat-kehamilan/create', [RiwayatKehamilanController::class, 'create'])->name('riwayat-kehamilan.create');
Route::post('/riwayat-kehamilan/store', [RiwayatKehamilanController::class, 'store'])->name('riwayat-kehamilan.store');
Route::get('/riwayat-kehamilan/edit/{id}', [RiwayatKehamilanController::class, 'edit'])->name('riwayat-kehamilan.edit');
Route::put('/riwayat-kehamilan/update/{id}', [RiwayatKehamilanController::class, 'update'])->name('riwayat-kehamilan.update');
Route::delete('/riwayat-kehamilan/delete/{id}', [RiwayatKehamilanController::class, 'destroy'])->name('riwayat-kehamilan.delete');

Route::get('/riwayat-penyakit-keluarga', [RiwayatPenyakitKeluargaController::class, 'index'])->name('riwayat-penyakit-keluarga.index');
Route::get('/riwayat-penyakit-keluarga/create', [RiwayatPenyakitKeluargaController::class, 'create'])->name('riwayat-penyakit-keluarga.create');
Route::post('/riwayat-penyakit-keluarga/store', [RiwayatPenyakitKeluargaController::class, 'store'])->name('riwayat-penyakit-keluarga.store');
Route::get('/riwayat-penyakit-keluarga/edit/{id}', [RiwayatPenyakitKeluargaController::class, 'edit'])->name('riwayat-penyakit-keluarga.edit');
Route::put('/riwayat-penyakit-keluarga/update/{id}', [RiwayatPenyakitKeluargaController::class, 'update'])->name('riwayat-penyakit-keluarga.update');
Route::delete('/riwayat-penyakit-keluarga/delete/{id}', [RiwayatPenyakitKeluargaController::class, 'destroy'])->name('riwayat-penyakit-keluarga.delete');

Route::get('/pemeriksaan-khusus', [PemeriksaanKhususController::class, 'index'])->name('pemeriksaan-khusus.index');
Route::get('/pemeriksaan-khusus/create', [PemeriksaanKhususController::class, 'create'])->name('pemeriksaan-khusus.create');
Route::post('/pemeriksaan-khusus/store', [PemeriksaanKhususController::class, 'store'])->name('pemeriksaan-khusus.store');
Route::get('/pemeriksaan-khusus/edit/{id}', [PemeriksaanKhususController::class, 'edit'])->name('pemeriksaan-khusus.edit');
Route::put('/pemeriksaan-khusus/update/{id}', [PemeriksaanKhususController::class, 'update'])->name('pemeriksaan-khusus.update');
Route::delete('/pemeriksaan-khusus/delete/{id}', [PemeriksaanKhususController::class, 'destroy'])->name('pemeriksaan-khusus.delete');

Route::get('/pemeriksaan-trimester1', [PemeriksaanTrimester1Controller::class, 'index'])->name('pemeriksaan-trimester1.index');
Route::get('/pemeriksaan-trimester1/create', [PemeriksaanTrimester1Controller::class, 'create'])->name('pemeriksaan-trimester1.create');
Route::post('/pemeriksaan-trimester1/store', [PemeriksaanTrimester1Controller::class, 'store'])->name('pemeriksaan-trimester1.store');
Route::get('/pemeriksaan-trimester1/edit/{id}', [PemeriksaanTrimester1Controller::class, 'edit'])->name('pemeriksaan-trimester1.edit');
Route::put('/pemeriksaan-trimester1/update/{id}', [PemeriksaanTrimester1Controller::class, 'update'])->name('pemeriksaan-trimester1.update');
Route::delete('/pemeriksaan-trimester1/delete/{id}', [PemeriksaanTrimester1Controller::class, 'destroy'])->name('pemeriksaan-trimester1.delete');

Route::get('/pemeriksaan-fisik-tri1', [PemeriksaanFisikTri1Controller::class, 'index'])->name('pemeriksaan-fisik-tri1.index');
Route::get('/pemeriksaan-fisik-tri1/create', [PemeriksaanFisikTri1Controller::class, 'create'])->name('pemeriksaan-fisik-tri1.create');
Route::post('/pemeriksaan-fisik-tri1/store', [PemeriksaanFisikTri1Controller::class, 'store'])->name('pemeriksaan-fisik-tri1.store');
Route::get('/pemeriksaan-fisik-tri1/edit/{id}', [PemeriksaanFisikTri1Controller::class, 'edit'])->name('pemeriksaan-fisik-tri1.edit');
Route::put('/pemeriksaan-fisik-tri1/update/{id}', [PemeriksaanFisikTri1Controller::class, 'update'])->name('pemeriksaan-fisik-tri1.update');
Route::delete('/pemeriksaan-fisik-tri1/delete/{id}', [PemeriksaanFisikTri1Controller::class, 'destroy'])->name('pemeriksaan-fisik-tri1.delete');

Route::get('/usg-tri1', [UsgTri1Controller::class, 'index'])->name('usg-tri1.index');
Route::get('/usg-tri1/create', [UsgTri1Controller::class, 'create'])->name('usg-tri1.create');
Route::post('/usg-tri1/store', [UsgTri1Controller::class, 'store'])->name('usg-tri1.store');
Route::get('/usg-tri1/edit/{id}', [UsgTri1Controller::class, 'edit'])->name('usg-tri1.edit');
Route::put('/usg-tri1/update/{id}', [UsgTri1Controller::class, 'update'])->name('usg-tri1.update');
Route::delete('/usg-tri1/delete/{id}', [UsgTri1Controller::class, 'destroy'])->name('usg-tri1.delete');

Route::get('/pemeriksaan-laboratorium-tri1', [PemeriksaanLaboratoriumTri1Controller::class, 'index'])->name('pemeriksaan-laboratorium-tri1.index');
Route::get('/pemeriksaan-laboratorium-tri1/create', [PemeriksaanLaboratoriumTri1Controller::class, 'create'])->name('pemeriksaan-laboratorium-tri1.create');
Route::post('/pemeriksaan-laboratorium-tri1/store', [PemeriksaanLaboratoriumTri1Controller::class, 'store'])->name('pemeriksaan-laboratorium-tri1.store');
Route::get('/pemeriksaan-laboratorium-tri1/edit/{id}', [PemeriksaanLaboratoriumTri1Controller::class, 'edit'])->name('pemeriksaan-laboratorium-tri1.edit');
Route::put('/pemeriksaan-laboratorium-tri1/update/{id}', [PemeriksaanLaboratoriumTri1Controller::class, 'update'])->name('pemeriksaan-laboratorium-tri1.update');
Route::delete('/pemeriksaan-laboratorium-tri1/delete/{id}', [PemeriksaanLaboratoriumTri1Controller::class, 'destroy'])->name('pemeriksaan-laboratorium-tri1.delete');

Route::get('/evaluasi-kehamilan', [EvaluasiKehamilanController::class, 'index'])->name('evaluasi-kehamilan.index');
Route::get('/evaluasi-kehamilan/create', [EvaluasiKehamilanController::class, 'create'])->name('evaluasi-kehamilan.create');
Route::post('/evaluasi-kehamilan/store', [EvaluasiKehamilanController::class, 'store'])->name('evaluasi-kehamilan.store');
Route::get('/evaluasi-kehamilan/edit/{id}', [EvaluasiKehamilanController::class, 'edit'])->name('evaluasi-kehamilan.edit');
Route::put('/evaluasi-kehamilan/update/{id}', [EvaluasiKehamilanController::class, 'update'])->name('evaluasi-kehamilan.update');
Route::delete('/evaluasi-kehamilan/delete/{id}', [EvaluasiKehamilanController::class, 'destroy'])->name('evaluasi-kehamilan.delete');

Route::get('/berat-badan-bumil', [BeratBadanBumilController::class, 'index'])->name('berat-badan-bumil.index');
Route::get('/berat-badan-bumil/create', [BeratBadanBumilController::class, 'create'])->name('berat-badan-bumil.create');
Route::post('/berat-badan-bumil/store', [BeratBadanBumilController::class, 'store'])->name('berat-badan-bumil.store');
Route::get('/berat-badan-bumil/edit/{id}', [BeratBadanBumilController::class, 'edit'])->name('berat-badan-bumil.edit');
Route::put('/berat-badan-bumil/update/{id}', [BeratBadanBumilController::class, 'update'])->name('berat-badan-bumil.update');
Route::delete('/berat-badan-bumil/delete/{id}', [BeratBadanBumilController::class, 'destroy'])->name('berat-badan-bumil.delete');

Route::get('/skrining-preeklampsia', [SkriningPreeklampsiaController::class, 'index'])->name('skrining-preeklampsia.index');
Route::get('/skrining-preeklampsia/create', [SkriningPreeklampsiaController::class, 'create'])->name('skrining-preeklampsia.create');
Route::post('/skrining-preeklampsia/store', [SkriningPreeklampsiaController::class, 'store'])->name('skrining-preeklampsia.store');
Route::get('/skrining-preeklampsia/edit/{id}', [SkriningPreeklampsiaController::class, 'edit'])->name('skrining-preeklampsia.edit');
Route::put('/skrining-preeklampsia/update/{id}', [SkriningPreeklampsiaController::class, 'update'])->name('skrining-preeklampsia.update');
Route::delete('/skrining-preeklampsia/delete/{id}', [SkriningPreeklampsiaController::class, 'destroy'])->name('skrining-preeklampsia.delete');

Route::get('/preeklampsia-anamnesis', [PreeklampsiaAnamnesisController::class, 'index'])->name('preeklampsia-anamnesis.index');
Route::get('/preeklampsia-anamnesis/create', [PreeklampsiaAnamnesisController::class, 'create'])->name('preeklampsia-anamnesis.create');
Route::post('/preeklampsia-anamnesis/store', [PreeklampsiaAnamnesisController::class, 'store'])->name('preeklampsia-anamnesis.store');
Route::get('/preeklampsia-anamnesis/edit/{id}', [PreeklampsiaAnamnesisController::class, 'edit'])->name('preeklampsia-anamnesis.edit');
Route::put('/preeklampsia-anamnesis/update/{id}', [PreeklampsiaAnamnesisController::class, 'update'])->name('preeklampsia-anamnesis.update');
Route::delete('/preeklampsia-anamnesis/delete/{id}', [PreeklampsiaAnamnesisController::class, 'destroy'])->name('preeklampsia-anamnesis.delete');

Route::get('/preeklampsia-fisik', [PreeklampsiaFisikController::class, 'index'])->name('preeklampsia-fisik.index');
Route::get('/preeklampsia-fisik/create', [PreeklampsiaFisikController::class, 'create'])->name('preeklampsia-fisik.create');
Route::post('/preeklampsia-fisik/store', [PreeklampsiaFisikController::class, 'store'])->name('preeklampsia-fisik.store');
Route::get('/preeklampsia-fisik/edit/{id}', [PreeklampsiaFisikController::class, 'edit'])->name('preeklampsia-fisik.edit');
Route::put('/preeklampsia-fisik/update/{id}', [PreeklampsiaFisikController::class, 'update'])->name('preeklampsia-fisik.update');
Route::delete('/preeklampsia-fisik/delete/{id}', [PreeklampsiaFisikController::class, 'destroy'])->name('preeklampsia-fisik.delete');

Route::get('/pemeriksaan-trimester3', [PemeriksaanTrimester3Controller::class, 'index'])->name('pemeriksaan-trimester3.index');
Route::get('/pemeriksaan-trimester3/create', [PemeriksaanTrimester3Controller::class, 'create'])->name('pemeriksaan-trimester3.create');
Route::post('/pemeriksaan-trimester3/store', [PemeriksaanTrimester3Controller::class, 'store'])->name('pemeriksaan-trimester3.store');
Route::get('/pemeriksaan-trimester3/edit/{id}', [PemeriksaanTrimester3Controller::class, 'edit'])->name('pemeriksaan-trimester3.edit');
Route::put('/pemeriksaan-trimester3/update/{id}', [PemeriksaanTrimester3Controller::class, 'update'])->name('pemeriksaan-trimester3.update');
Route::delete('/pemeriksaan-trimester3/delete/{id}', [PemeriksaanTrimester3Controller::class, 'destroy'])->name('pemeriksaan-trimester3.delete');

Route::get('/pemeriksaan-fisik-tri3', [PemeriksaanFisikTri3Controller::class, 'index'])->name('pemeriksaan-fisik-tri3.index');
Route::get('/pemeriksaan-fisik-tri3/create', [PemeriksaanFisikTri3Controller::class, 'create'])->name('pemeriksaan-fisik-tri3.create');
Route::post('/pemeriksaan-fisik-tri3/store', [PemeriksaanFisikTri3Controller::class, 'store'])->name('pemeriksaan-fisik-tri3.store');
Route::get('/pemeriksaan-fisik-tri3/edit/{id}', [PemeriksaanFisikTri3Controller::class, 'edit'])->name('pemeriksaan-fisik-tri3.edit');
Route::put('/pemeriksaan-fisik-tri3/update/{id}', [PemeriksaanFisikTri3Controller::class, 'update'])->name('pemeriksaan-fisik-tri3.update');
Route::delete('/pemeriksaan-fisik-tri3/delete/{id}', [PemeriksaanFisikTri3Controller::class, 'destroy'])->name('pemeriksaan-fisik-tri3.delete');

Route::get('/usg-tri3', [UsgTri3Controller::class, 'index'])->name('usg-tri3.index');
Route::get('/usg-tri3/create', [UsgTri3Controller::class, 'create'])->name('usg-tri3.create');
Route::post('/usg-tri3/store', [UsgTri3Controller::class, 'store'])->name('usg-tri3.store');
Route::get('/usg-tri3/edit/{id}', [UsgTri3Controller::class, 'edit'])->name('usg-tri3.edit');
Route::put('/usg-tri3/update/{id}', [UsgTri3Controller::class, 'update'])->name('usg-tri3.update');
Route::delete('/usg-tri3/delete/{id}', [UsgTri3Controller::class, 'destroy'])->name('usg-tri3.delete');

Route::get('/pemeriksaan-laboratorium-tri3', [PemeriksaanLaboratoriumTri3Controller::class, 'index'])->name('pemeriksaan-laboratorium-tri3.index');
Route::get('/pemeriksaan-laboratorium-tri3/create', [PemeriksaanLaboratoriumTri3Controller::class, 'create'])->name('pemeriksaan-laboratorium-tri3.create');
Route::post('/pemeriksaan-laboratorium-tri3/store', [PemeriksaanLaboratoriumTri3Controller::class, 'store'])->name('pemeriksaan-laboratorium-tri3.store');
Route::get('/pemeriksaan-laboratorium-tri3/edit/{id}', [PemeriksaanLaboratoriumTri3Controller::class, 'edit'])->name('pemeriksaan-laboratorium-tri3.edit');
Route::put('/pemeriksaan-laboratorium-tri3/update/{id}', [PemeriksaanLaboratoriumTri3Controller::class, 'update'])->name('pemeriksaan-laboratorium-tri3.update');
Route::delete('/pemeriksaan-laboratorium-tri3/delete/{id}', [PemeriksaanLaboratoriumTri3Controller::class, 'destroy'])->name('pemeriksaan-laboratorium-tri3.delete');

Route::get('/ringkasan-kesehatan', [RingkasanKesehatanController::class, 'index'])->name('ringkasan-kesehatan.index');
Route::get('/ringkasan-kesehatan/create', [RingkasanKesehatanController::class, 'create'])->name('ringkasan-kesehatan.create');
Route::post('/ringkasan-kesehatan/store', [RingkasanKesehatanController::class, 'store'])->name('ringkasan-kesehatan.store');
Route::get('/ringkasan-kesehatan/edit/{id}', [RingkasanKesehatanController::class, 'edit'])->name('ringkasan-kesehatan.edit');
Route::put('/ringkasan-kesehatan/update/{id}', [RingkasanKesehatanController::class, 'update'])->name('ringkasan-kesehatan.update');
Route::delete('/ringkasan-kesehatan/delete/{id}', [RingkasanKesehatanController::class, 'destroy'])->name('ringkasan-kesehatan.delete');

Route::get('/ibu-bersalin', [RingkasanKesehatanController::class, 'index'])->name('ibu-bersalin.index');
Route::get('/ibu-bersalin/create', [RingkasanKesehatanController::class, 'create'])->name('ibu-bersalin.create');
Route::post('/ibu-bersalin/store', [RingkasanKesehatanController::class, 'store'])->name('ibu-bersalin.store');
Route::get('/ibu-bersalin/edit/{id}', [RingkasanKesehatanController::class, 'edit'])->name('ibu-bersalin.edit');
Route::put('/ibu-bersalin/update/{id}', [RingkasanKesehatanController::class, 'update'])->name('ibu-bersalin.update');
Route::delete('/ibu-bersalin/delete/{id}', [RingkasanKesehatanController::class, 'destroy'])->name('ibu-bersalin.delete');

Route::get('/bayi-lahir', [RingkasanKesehatanController::class, 'index'])->name('bayi-lahir.index');
Route::get('/bayi-lahir/create', [RingkasanKesehatanController::class, 'create'])->name('bayi-lahir.create');
Route::post('/bayi-lahir/store', [RingkasanKesehatanController::class, 'store'])->name('bayi-lahir.store');
Route::get('/bayi-lahir/edit/{id}', [RingkasanKesehatanController::class, 'edit'])->name('bayi-lahir.edit');
Route::put('/bayi-lahir/update/{id}', [RingkasanKesehatanController::class, 'update'])->name('bayi-lahir.update');
Route::delete('/bayi-lahir/delete/{id}', [RingkasanKesehatanController::class, 'destroy'])->name('bayi-lahir.delete');

Route::get('/ringkasan-nifas', [RingkasanNifasController::class, 'index'])->name('ringkasan-nifas.index');
Route::get('/ringkasan-nifas/create', [RingkasanNifasController::class, 'create'])->name('ringkasan-nifas.create');
Route::post('/ringkasan-nifas/store', [RingkasanNifasController::class, 'store'])->name('ringkasan-nifas.store');
Route::get('/ringkasan-nifas/edit/{id}', [RingkasanNifasController::class, 'edit'])->name('ringkasan-nifas.edit');
Route::put('/ringkasan-nifas/update/{id}', [RingkasanNifasController::class, 'update'])->name('ringkasan-nifas.update');
Route::delete('/ringkasan-nifas/delete/{id}', [RingkasanNifasController::class, 'destroy'])->name('ringkasan-nifas.delete');

Route::get('/ringkasan-kesimpulan-nifas', [RingkasanKesimpulanNifasController::class, 'index'])->name('ringkasan-kesimpulan-nifas.index');
Route::get('/ringkasan-kesimpulan-nifas/create', [RingkasanKesimpulanNifasController::class, 'create'])->name('ringkasan-kesimpulan-nifas.create');
Route::post('/ringkasan-kesimpulan-nifas/store', [RingkasanKesimpulanNifasController::class, 'store'])->name('ringkasan-kesimpulan-nifas.store');
Route::get('/ringkasan-kesimpulan-nifas/edit/{id}', [RingkasanKesimpulanNifasController::class, 'edit'])->name('ringkasan-kesimpulan-nifas.edit');
Route::put('/ringkasan-kesimpulan-nifas/update/{id}', [RingkasanKesimpulanNifasController::class, 'update'])->name('ringkasan-kesimpulan-nifas.update');
Route::delete('/ringkasan-kesimpulan-nifas/delete/{id}', [RingkasanKesimpulanNifasController::class, 'destroy'])->name('ringkasan-kesimpulan-nifas.delete');

Route::get('/rujukan', [RujukanController::class, 'index'])->name('rujukan.index');
Route::get('/rujukan/create', [RujukanController::class, 'create'])->name('rujukan.create');
Route::post('/rujukan/store', [RujukanController::class, 'store'])->name('rujukan.store');
Route::get('/rujukan/edit/{id}', [RujukanController::class, 'edit'])->name('rujukan.edit');
Route::put('/rujukan/update/{id}', [RujukanController::class, 'update'])->name('rujukan.update');
Route::delete('/rujukan/delete/{id}', [RujukanController::class, 'destroy'])->name('rujukan.delete');

Route::get('/wali', [WaliController::class, 'index'])->name('wali.index');  
Route::get('/wali/create', [WaliController::class, 'create'])->name('wali.create');
Route::post('/wali/store', [WaliController::class, 'store'])->name('wali.store');
Route::get('/wali/edit/{id}', [WaliController::class, 'edit'])->name('wali.edit');
Route::put('/wali/update/{id}', [WaliController::class, 'update'])->name('wali.update');
Route::delete('/wali/delete/{id}', [WaliController::class, 'destroy'])->name('wali.delete');

Route::get('/anak', [AnakController::class, 'index'])->name('anak.index');
Route::get('/anak/create', [AnakController::class, 'create'])->name('anak.create');
Route::post('/anak/store', [AnakController::class, 'store'])->name('anak.store');
Route::get('/anak/edit/{id}', [AnakController::class, 'edit'])->name('anak.edit');
Route::put('/anak/update/{id}', [AnakController::class, 'update'])->name('anak.update');
Route::delete('/anak/delete/{id}', [AnakController::class, 'destroy'])->name('anak.delete');

Route::get('/identitas-anak', [IdentitasAnakController::class, 'create'])->name('identitas.anak.create');
Route::post('/identitas-anak', [IdentitasAnakController::class, 'store'])->name('identitas.anak.store');
Route::get('/identitas-anak/edit/{id}', [IdentitasAnakController::class, 'edit'])->name('identitas.anak.edit');
Route::put('/identitas-anak/update/{id}', [IdentitasAnakController::class, 'update'])->name('identitas.anak.update');
Route::delete('/identitas-anak/delete/{id}', [IdentitasAnakController::class, 'destroy'])->name('identitas.anak.delete');
Route::get('/identitas-anak/data', [IdentitasAnakController::class, 'getData'])->name('identitas.anak.data');

Route::get('/coba-grafik', function () {
    return view('admin.pages.coba-grafik');
});

require __DIR__ . '/auth.php';
