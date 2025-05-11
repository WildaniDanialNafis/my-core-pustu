<?php

namespace Database\Seeders;

use App\Models\ImtLaki;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImtLakiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idAnak = 1;
        $tahunMulai = 0;

        // Data IMT per bulan (misalnya IMT anak laki-laki dari usia 0-23 bulan)
        $imtPerBulan = [
            14.5, 15.0, 15.2, 15.4, 15.5, 15.7, 15.8, 16.0, 16.1, 16.2, 16.3, 16.5,
            16.6, 16.8, 16.9, 17.1, 17.3, 17.4, 17.6, 17.7, 17.9, 18.0, 18.2, 18.3
        ];

        for ($i = 0; $i < count($imtPerBulan); $i++) {
            $bulan = ($i % 12) + 1;
            $tahun = $tahunMulai + floor($i / 12);

            ImtLaki::create([
                'id_anak' => $idAnak,
                'imt' => $imtPerBulan[$i] + rand(-0.3, 0.3), // variasi ±0.3
                'bulan' => $bulan,
                'tahun' => $tahun,
            ]);
        }
    }
}
