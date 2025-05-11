<?php

namespace Database\Seeders;

use App\Models\LingkarKepalaPerempuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LingkarKepalaPerempuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idAnak = 1;
        $tahunMulai = 0;

        $lkPerBulan = [
            34.5, 37.3, 39.1, 40.5, 41.6, 42.4, 43.0, 43.6, 44.1, 44.5, 44.9, 45.2,
            45.6, 45.8, 46.1, 46.3, 46.5, 46.7, 46.9, 47.1, 47.3, 47.4, 47.6, 47.7
        ];

        for ($i = 0; $i < count($lkPerBulan); $i++) {
            $bulan = ($i % 12) + 1;
            $tahun = $tahunMulai + floor($i / 12);

            LingkarKepalaPerempuan::create([
                'id_anak' => $idAnak,
                'lingkar_kepala' => $lkPerBulan[$i] + rand(-3, 3) / 10,
                'bulan' => $bulan,
                'tahun' => $tahun,
            ]);
        }
    }
}
