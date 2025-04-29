<?php

namespace Database\Seeders;

use App\Models\AmanatDarah;
use App\Models\AmanatKendaraan;
use App\Models\AmanatPenolongPersalinan;
use App\Models\Anak;
use App\Models\AnakBalita;
use App\Models\Bayi;
use App\Models\BayiBaruLahir;
use App\Models\BayiLahir;
use App\Models\BbTbLaki;
use App\Models\BbTbPerempuan;
use App\Models\BbULaki;
use App\Models\BbUPerempuan;
use App\Models\BeratBadanBumil;
use App\Models\DataKesehatanGigi;
use App\Models\DataKmsLaki;
use App\Models\DataKmsPerempuan;
use App\Models\EvaluasiKehamilan;
use App\Models\EvaluasiKesehatanBumil;
use App\Models\Ibu;
use App\Models\IbuBersalin;
use App\Models\ImtLaki;
use App\Models\ImtPerempuan;
use App\Models\Imunisasi;
use App\Models\ImunisasiT;
use App\Models\KapsulAnak;
use App\Models\Keluarga;
use App\Models\Kesehatan1;
use App\Models\Kesehatan2;
use App\Models\KesehatanBersalin;
use App\Models\KesehatanGigi;
use App\Models\KesehatanNifas;
use App\Models\KeteranganLahir;
use App\Models\KmsLaki;
use App\Models\KmsPerempuan;
use App\Models\KN0;
use App\Models\KN1;
use App\Models\KN2;
use App\Models\KN3;
use App\Models\KondisiKesehatanBumil;
use App\Models\KontrolTtd;
use App\Models\LingkarKepalaLaki;
use App\Models\LingkarKepalaPerempuan;
use App\Models\MenyambutPersalinan;
use App\Models\MinumTtd;
use App\Models\NasihatAnak;
use App\Models\PelayananKesehatanNeonatus;
use App\Models\PelayananSdidtk;
use App\Models\PemantauanKia;
use App\Models\PemeriksaanFisikTri1;
use App\Models\PemeriksaanFisikTri3;
use App\Models\PemeriksaanKhusus;
use App\Models\PemeriksaanLaboratoriumTri1;
use App\Models\PemeriksaanLaboratoriumTri3;
use App\Models\PemeriksaanTrimester1;
use App\Models\PemeriksaanTrimester3;
use App\Models\PenyimpanganEmosional;
use App\Models\PenyimpanganPerkembangan;
use App\Models\PenyimpanganPertumbuhan;
use App\Models\PreeklampsiaAnamnesis;
use App\Models\PreeklampsiaFisik;
use App\Models\RingkasanKesehatan;
use App\Models\RingkasanKesimpulanNifas;
use App\Models\RingkasanMtbs;
use App\Models\RingkasanNifas;
use App\Models\RingkasanPelayananDokter;
use App\Models\RiwayatKehamilan;
use App\Models\RiwayatKelahiran;
use App\Models\RiwayatKesehatanBumil;
use App\Models\RiwayatPenyakitKeluarga;
use App\Models\RiwayatPerilakuBerisiko;
use App\Models\Rujukan;
use App\Models\RujukanAnak;
use App\Models\SkriningPreeklampsia;
use App\Models\TbULaki;
use App\Models\TbUPerempuan;
use App\Models\UmurKapsulAnak;
use App\Models\User;
use App\Models\UsgTri1;
use App\Models\UsgTri3;
use App\Models\Wali;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RoleSeeder::class,
        ]);

        // User::factory()->count(10)->create();
        // Ibu::factory()->count(10)->create();
        Keluarga::factory()->count(10)->create();

        // Kesehatan1::factory()->count(10)->create();
        Kesehatan2::factory()->count(10)->create();
        KesehatanBersalin::factory()->count(10)->create();
        KesehatanNifas::factory()->count(10)->create();
        // KontrolTtd::factory()->count(10)->create();
        MinumTtd::factory()->count(10)->create();
        // MenyambutPersalinan::factory()->count(10)->create();
        AmanatPenolongPersalinan::factory()->count(10)->create();
        AmanatKendaraan::factory()->count(10)->create();
        AmanatDarah::factory()->count(10)->create();
        // EvaluasiKesehatanBumil::factory()->count(10)->create();
        KondisiKesehatanBumil::factory()->count(10)->create();
        ImunisasiT::factory()->count(10)->create();
        RiwayatKesehatanBumil::factory()->count(10)->create();
        RiwayatPerilakuBerisiko::factory()->count(10)->create();
        RiwayatKehamilan::factory()->count(10)->create();
        RiwayatPenyakitKeluarga::factory()->count(10)->create();
        PemeriksaanKhusus::factory()->count(10)->create();
        PemeriksaanTrimester1::factory()->count(10)->create();
        PemeriksaanFisikTri1::factory()->count(10)->create();
        UsgTri1::factory()->count(10)->create();
        PemeriksaanLaboratoriumTri1::factory()->count(10)->create();
        EvaluasiKehamilan::factory()->count(10)->create();
        BeratBadanBumil::factory()->count(10)->create();
        SkriningPreeklampsia::factory()->count(10)->create();
        $this->call(KriteriaAnamnesisSeeder::class);
        $this->call(KriteriaPemeriksaanFisikSeeder::class);
        PreeklampsiaAnamnesis::factory()->count(10)->create();
        PreeklampsiaFisik::factory()->count(10)->create();
        PemeriksaanTrimester3::factory()->count(10)->create();
        PemeriksaanFisikTri3::factory()->count(10)->create();
        UsgTri3::factory()->count(10)->create();
        PemeriksaanLaboratoriumTri3::factory()->count(10)->create();
        RingkasanKesehatan::factory()->count(10)->create();
        IbuBersalin::factory()->count(10)->create();
        BayiLahir::factory()->count(10)->create();
        RingkasanNifas::factory()->count(10)->create();
        RingkasanKesimpulanNifas::factory()->count(10)->create();
        Rujukan::factory()->count(10)->create();

        // Wali::factory()->count(10)->create();
        Anak::factory()->count(10)->create();
        BayiBaruLahir::factory()->count(10)->create();
        Bayi::factory()->count(10)->create();
        AnakBalita::factory()->count(10)->create();
        KeteranganLahir::factory()->count(10)->create();
        RiwayatKelahiran::factory()->count(10)->create();
        PelayananKesehatanNeonatus::factory()->count(10)->create();
        KN0::factory()->count(10)->create();
        KN1::factory()->count(10)->create();
        KN2::factory()->count(10)->create();
        KN3::factory()->count(10)->create();
        $this->call(VaksinSeeder::class);
        Imunisasi::factory()->count(10)->create();
        $this->call(CeklisSeeder::class);
        PemantauanKia::factory()->count(10)->create();
        $this->call(UmurSdidtkSeeder::class);
        PelayananSdidtk::factory()->count(10)->create();
        PenyimpanganPertumbuhan::factory()->count(10)->create();
        PenyimpanganPerkembangan::factory()->count(10)->create();
        PenyimpanganEmosional::factory()->count(10)->create();
        $this->call(UmurNasihatAnakSeeder::class);
        NasihatAnak::factory()->count(10)->create();
        $this->call(UmurKapsulAnakSeeder::class);
        KapsulAnak::factory()->count(10)->create();
        KmsPerempuan::factory()->count(10)->create();
        DataKmsPerempuan::factory()->count(10)->create();
        BbUPerempuan::factory()->count(10)->create();
        TbUPerempuan::factory()->count(10)->create();
        BbTbPerempuan::factory()->count(10)->create();
        LingkarKepalaPerempuan::factory()->count(10)->create();
        KmsLaki::factory()->count(10)->create();
        DataKmsLaki::factory()->count(10)->create();
        BbULaki::factory()->count(10)->create();
        TbULaki::factory()->count(10)->create();
        BbTbLaki::factory()->count(10)->create();
        LingkarKepalaLaki::factory()->count(10)->create();
        ImtPerempuan::factory()->count(10)->create();
        ImtLaki::factory()->count(10)->create();
        KesehatanGigi::factory()->count(10)->create();
        DataKesehatanGigi::factory()->count(10)->create();
        RingkasanMtbs::factory()->count(10)->create();
        RingkasanPelayananDokter::factory()->count(10)->create();
        RujukanAnak::factory()->count(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'id_role' => 1
        ]);
    }
}
