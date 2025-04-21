<?php

namespace Database\Seeders;

use App\Models\AmanatDarah;
use App\Models\AmanatKendaraan;
use App\Models\AmanatPenolongPersalinan;
use App\Models\Anak;
use App\Models\BayiLahir;
use App\Models\BeratBadanBumil;
use App\Models\EvaluasiKehamilan;
use App\Models\EvaluasiKesehatanBumil;
use App\Models\Ibu;
use App\Models\IbuBersalin;
use App\Models\ImunisasiT;
use App\Models\Keluarga;
use App\Models\Kesehatan1;
use App\Models\Kesehatan2;
use App\Models\KesehatanBersalin;
use App\Models\KesehatanNifas;
use App\Models\KondisiKesehatanBumil;
use App\Models\KontrolTtd;
use App\Models\MenyambutPersalinan;
use App\Models\MinumTtd;
use App\Models\PemeriksaanFisikTri1;
use App\Models\PemeriksaanFisikTri3;
use App\Models\PemeriksaanKhusus;
use App\Models\PemeriksaanLaboratoriumTri1;
use App\Models\PemeriksaanLaboratoriumTri3;
use App\Models\PemeriksaanTrimester1;
use App\Models\PemeriksaanTrimester3;
use App\Models\PreeklampsiaAnamnesis;
use App\Models\PreeklampsiaFisik;
use App\Models\RingkasanKesehatan;
use App\Models\RingkasanKesimpulanNifas;
use App\Models\RingkasanNifas;
use App\Models\RiwayatKehamilan;
use App\Models\RiwayatKesehatanBumil;
use App\Models\RiwayatPenyakitKeluarga;
use App\Models\RiwayatPerilakuBerisiko;
use App\Models\Rujukan;
use App\Models\SkriningPreeklampsia;
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

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'id_role' => 1
        ]);
    }
}
