<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

// Models
use App\Models\{User, Ibu, Keluarga, Anak, Bayi, BayiLahir, IbuBersalin, RingkasanKesehatan, Kesehatan1, Kesehatan2, KesehatanBersalin, KesehatanNifas, MinumTtd, MenyambutPersalinan, AmanatPenolongPersalinan, AmanatKendaraan, EvaluasiKesehatanBumil, AmanatDarah, KondisiKesehatanBumil, ImunisasiT, RiwayatKesehatanBumil, RiwayatPerilakuBerisiko, RiwayatKehamilan, RiwayatPenyakitKeluarga, PemeriksaanKhusus, PemeriksaanTrimester1, PemeriksaanFisikTri1, UsgTri1, PemeriksaanLaboratoriumTri1, EvaluasiKehamilan, BeratBadanBumil, SkriningPreeklampsia, PreeklampsiaAnamnesis, PreeklampsiaFisik, PemeriksaanTrimester3, PemeriksaanFisikTri3, UsgTri3, PemeriksaanLaboratoriumTri3, RingkasanNifas, RingkasanKesimpulanNifas, Rujukan, Wali, BayiBaruLahir, AnakBalita, KeteranganLahir, RiwayatKelahiran, PelayananKesehatanNeonatus, KN0, KN1, KN2, KN3, Imunisasi, PemantauanKia, PelayananSdidtk, PenyimpanganPertumbuhan, PenyimpanganPerkembangan, PenyimpanganEmosional, NasihatAnak, KapsulAnak, KesehatanGigi, DataKesehatanGigi, KmsLaki, DataKmsLaki, BbULaki, TbULaki, BbTbLaki, LingkarKepalaLaki, KmsPerempuan, DataKmsPerempuan, BbUPerempuan, TbUPerempuan, BbTbPerempuan, LingkarKepalaPerempuan, ImtLaki, ImtPerempuan, RingkasanMtbs, RingkasanPelayananDokter, RujukanAnak};

// Seeder Classes
use Database\Seeders\{RoleSeeder, KriteriaAnamnesisSeeder, KriteriaPemeriksaanFisikSeeder, VaksinSeeder, CeklisSeeder, UmurSdidtkSeeder, UmurNasihatAnakSeeder, UmurKapsulAnakSeeder, BbULakiSeeder, TbULakiSeeder, BbTbLakiSeeder, LingkarKepalaLakiSeeder, BbUPerempuanSeeder, TbUPerempuanSeeder, BbTbPerempuanSeeder, LingkarKepalaPerempuanSeeder, ImtLakiSeeder, ImtPerempuanSeeder};

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([RoleSeeder::class]);

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

        User::factory()->count(20)->create(['password' => Hash::make('password')]);

        Ibu::factory()->count(100)->create();
        Keluarga::factory()->count(100)->create();
        Anak::factory()->count(80)->create();
        Bayi::factory()->count(80)->create();
        BayiLahir::factory()->count(80)->create();
        IbuBersalin::factory()->count(80)->create();

        RingkasanKesehatan::factory()->count(300)->create();
        Kesehatan1::factory()->count(300)->create();
        Kesehatan2::factory()->count(300)->create();
        KesehatanBersalin::factory()->count(200)->create();
        KesehatanNifas::factory()->count(200)->create();

        MinumTtd::factory()->count(200)->create();
        MenyambutPersalinan::factory()->count(100)->create();
        AmanatPenolongPersalinan::factory()->count(100)->create();
        AmanatKendaraan::factory()->count(100)->create();
        AmanatDarah::factory()->count(100)->create();

        EvaluasiKesehatanBumil::factory()->count(200)->create();
        KondisiKesehatanBumil::factory()->count(200)->create();
        ImunisasiT::factory()->count(100)->create();

        RiwayatKesehatanBumil::factory()->count(150)->create();
        RiwayatPerilakuBerisiko::factory()->count(150)->create();
        RiwayatKehamilan::factory()->count(150)->create();
        RiwayatPenyakitKeluarga::factory()->count(150)->create();

        PemeriksaanKhusus::factory()->count(150)->create();
        PemeriksaanTrimester1::factory()->count(200)->create();
        PemeriksaanFisikTri1::factory()->count(200)->create();
        PemeriksaanLaboratoriumTri1::factory()->count(200)->create();
        UsgTri1::factory()->count(200)->create();
        EvaluasiKehamilan::factory()->count(150)->create();

        BeratBadanBumil::factory()->count(200)->create();
        SkriningPreeklampsia::factory()->count(150)->create();
        $this->call([KriteriaAnamnesisSeeder::class, KriteriaPemeriksaanFisikSeeder::class]);
        PreeklampsiaAnamnesis::factory()->count(200)->create();
        PreeklampsiaFisik::factory()->count(200)->create();

        PemeriksaanTrimester3::factory()->count(150)->create();
        PemeriksaanFisikTri3::factory()->count(150)->create();
        PemeriksaanLaboratoriumTri3::factory()->count(150)->create();
        UsgTri3::factory()->count(150)->create();

        RingkasanNifas::factory()->count(150)->create();
        RingkasanKesimpulanNifas::factory()->count(150)->create();
        Rujukan::factory()->count(100)->create();
        RujukanAnak::factory()->count(100)->create();
        Wali::factory()->count(80)->create();

        BayiBaruLahir::factory()->count(80)->create();
        AnakBalita::factory()->count(80)->create();
        KeteranganLahir::factory()->count(80)->create();
        RiwayatKelahiran::factory()->count(80)->create();
        PelayananKesehatanNeonatus::factory()->count(80)->create();

        KN0::factory()->count(100)->create();
        KN1::factory()->count(100)->create();
        KN2::factory()->count(100)->create();
        KN3::factory()->count(100)->create();

        $this->call([VaksinSeeder::class, CeklisSeeder::class, UmurSdidtkSeeder::class]);

        Imunisasi::factory()->count(300)->create();
        PemantauanKia::factory()->count(100)->create();
        PelayananSdidtk::factory()->count(100)->create();
        PenyimpanganPertumbuhan::factory()->count(100)->create();
        PenyimpanganPerkembangan::factory()->count(100)->create();
        PenyimpanganEmosional::factory()->count(100)->create();

        $this->call([UmurNasihatAnakSeeder::class, UmurKapsulAnakSeeder::class]);
        NasihatAnak::factory()->count(100)->create();
        KapsulAnak::factory()->count(100)->create();

        KmsPerempuan::factory()->count(100)->create();
        DataKmsPerempuan::factory()->count(100)->create();
        BbUPerempuan::factory()->count(100)->create();
        TbUPerempuan::factory()->count(100)->create();
        BbTbPerempuan::factory()->count(100)->create();
        LingkarKepalaPerempuan::factory()->count(100)->create();

        KmsLaki::factory()->count(100)->create();
        DataKmsLaki::factory()->count(100)->create();
        BbULaki::factory()->count(100)->create();
        TbULaki::factory()->count(100)->create();
        BbTbLaki::factory()->count(100)->create();
        LingkarKepalaLaki::factory()->count(100)->create();

        ImtPerempuan::factory()->count(100)->create();
        ImtLaki::factory()->count(100)->create();
        KesehatanGigi::factory()->count(100)->create();
        DataKesehatanGigi::factory()->count(100)->create();

        RingkasanMtbs::factory()->count(100)->create();
        RingkasanPelayananDokter::factory()->count(100)->create();

        $this->call([
            BbULakiSeeder::class, TbULakiSeeder::class, BbTbLakiSeeder::class, LingkarKepalaLakiSeeder::class,
            BbUPerempuanSeeder::class, TbUPerempuanSeeder::class, BbTbPerempuanSeeder::class, LingkarKepalaPerempuanSeeder::class,
            ImtLakiSeeder::class, ImtPerempuanSeeder::class,
        ]);
    }
}
