<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

// Models
use App\Models\{
    AmanatDarah,
    AmanatKendaraan,
    AmanatPenolongPersalinan,
    Anak,
    AnakBalita,
    Bayi,
    BayiBaruLahir,
    BayiLahir,
    BbTbLaki,
    BbTbPerempuan,
    BbULaki,
    BbUPerempuan,
    BeratBadanBumil,
    DataKesehatanGigi,
    DataKmsLaki,
    DataKmsPerempuan,
    EvaluasiKehamilan,
    EvaluasiKesehatanBumil,
    Ibu,
    IbuBersalin,
    ImtLaki,
    ImtPerempuan,
    Imunisasi,
    ImunisasiT,
    KapsulAnak,
    Keluarga,
    Kesehatan1,
    Kesehatan2,
    KesehatanBersalin,
    KesehatanGigi,
    KesehatanNifas,
    KeteranganLahir,
    KmsLaki,
    KmsPerempuan,
    KN0,
    KN1,
    KN2,
    KN3,
    KondisiKesehatanBumil,
    KontrolTtd,
    LingkarKepalaLaki,
    LingkarKepalaPerempuan,
    MenyambutPersalinan,
    MinumTtd,
    NasihatAnak,
    PelayananKesehatanNeonatus,
    PelayananSdidtk,
    PemantauanKia,
    PemeriksaanFisikTri1,
    PemeriksaanFisikTri3,
    PemeriksaanKhusus,
    PemeriksaanLaboratoriumTri1,
    PemeriksaanLaboratoriumTri3,
    PemeriksaanTrimester1,
    PemeriksaanTrimester3,
    PenyimpanganEmosional,
    PenyimpanganPerkembangan,
    PenyimpanganPertumbuhan,
    PreeklampsiaAnamnesis,
    PreeklampsiaFisik,
    RingkasanKesehatan,
    RingkasanKesimpulanNifas,
    RingkasanMtbs,
    RingkasanNifas,
    RingkasanPelayananDokter,
    RiwayatKehamilan,
    RiwayatKelahiran,
    RiwayatKesehatanBumil,
    RiwayatPenyakitKeluarga,
    RiwayatPerilakuBerisiko,
    Rujukan,
    RujukanAnak,
    SkriningPreeklampsia,
    TbULaki,
    TbUPerempuan,
    UmurKapsulAnak,
    User,
    UsgTri1,
    UsgTri3,
    Wali
};

// Seeder Classes
use Database\Seeders\{
    RoleSeeder,
    KriteriaAnamnesisSeeder,
    KriteriaPemeriksaanFisikSeeder,
    VaksinSeeder,
    CeklisSeeder,
    UmurSdidtkSeeder,
    UmurNasihatAnakSeeder,
    UmurKapsulAnakSeeder,
    BbULakiSeeder,
    TbULakiSeeder,
    BbTbLakiSeeder,
    LingkarKepalaLakiSeeder,
    BbUPerempuanSeeder,
    TbUPerempuanSeeder,
    BbTbPerempuanSeeder,
    LingkarKepalaPerempuanSeeder,
    ImtLakiSeeder,
    ImtPerempuanSeeder,
    CobaDataSeeder
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Role
        $this->call([RoleSeeder::class]);

        // Contoh data user
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'id_role' => 1,
        ]);
        
        User::factory()->create([
            'name' => 'Ibu',
            'email' => 'ibu@example.com',
            'password' => Hash::make('password'),
            'id_role' => 2,
        ]);
        
        // 8 user acak
        User::factory()->count(8)->create([
            'password' => Hash::make('password'), // default password
            // kamu bisa tetapkan 'id_role' tetap, atau random:
            'id_role' => rand(1, 3), // misalnya role 1-3
        ]);

        // Data utama
        Ibu::factory()->count(10)->create();
        Keluarga::factory()->count(10)->create();
        Kesehatan1::factory()->count(10)->create();
        Kesehatan2::factory()->count(10)->create();
        KesehatanBersalin::factory()->count(10)->create();
        KesehatanNifas::factory()->count(10)->create();
        MinumTtd::factory()->count(10)->create();
        MenyambutPersalinan::factory()->count(10)->create();
        AmanatPenolongPersalinan::factory()->count(10)->create();
        AmanatKendaraan::factory()->count(10)->create();
        EvaluasiKesehatanBumil::factory()->count(10)->create();
        AmanatDarah::factory()->count(10)->create();
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

        $this->call([
            KriteriaAnamnesisSeeder::class,
            KriteriaPemeriksaanFisikSeeder::class
        ]);

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
        Wali::factory()->count(10)->create();
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

        $this->call([
            VaksinSeeder::class,
            CeklisSeeder::class,
            UmurSdidtkSeeder::class
        ]);

        Imunisasi::factory()->count(10)->create();
        PemantauanKia::factory()->count(10)->create();
        PelayananSdidtk::factory()->count(10)->create();
        PenyimpanganPertumbuhan::factory()->count(10)->create();
        PenyimpanganPerkembangan::factory()->count(10)->create();
        PenyimpanganEmosional::factory()->count(10)->create();

        $this->call([
            UmurNasihatAnakSeeder::class,
            UmurKapsulAnakSeeder::class
        ]);

        NasihatAnak::factory()->count(10)->create();
        KapsulAnak::factory()->count(10)->create();

        // Data KMS & grafik anak perempuan
        KmsPerempuan::factory()->count(10)->create();
        DataKmsPerempuan::factory()->count(10)->create();
        BbUPerempuan::factory()->count(10)->create();
        TbUPerempuan::factory()->count(10)->create();
        BbTbPerempuan::factory()->count(10)->create();
        LingkarKepalaPerempuan::factory()->count(10)->create();

        // Data KMS & grafik anak laki-laki
        KmsLaki::factory()->count(10)->create();
        DataKmsLaki::factory()->count(10)->create();
        BbULaki::factory()->count(10)->create();
        TbULaki::factory()->count(10)->create();
        BbTbLaki::factory()->count(10)->create();
        LingkarKepalaLaki::factory()->count(10)->create();

        // Data IMT & gigi
        ImtPerempuan::factory()->count(10)->create();
        ImtLaki::factory()->count(10)->create();
        KesehatanGigi::factory()->count(10)->create();
        DataKesehatanGigi::factory()->count(10)->create();

        // Ringkasan & rujukan
        RingkasanMtbs::factory()->count(10)->create();
        RingkasanPelayananDokter::factory()->count(10)->create();
        RujukanAnak::factory()->count(10)->create();

        // Seeder tambahan grafik
        $this->call([
            BbULakiSeeder::class,
            TbULakiSeeder::class,
            BbTbLakiSeeder::class,
            LingkarKepalaLakiSeeder::class,
            BbUPerempuanSeeder::class,
            TbUPerempuanSeeder::class,
            BbTbPerempuanSeeder::class,
            LingkarKepalaPerempuanSeeder::class,
            ImtLakiSeeder::class,
            ImtPerempuanSeeder::class,
        ]);

        // $this->call(CobaDataSeeder::class);
    }
}
