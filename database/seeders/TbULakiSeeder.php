<?php

namespace Database\Seeders;

use App\Models\TbULaki;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TbULakiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idAnak = 1;
        $tahunMulai = 0;

        $tbPerBulan = [
            49.9, 54.7, 58.4, 61.4, 63.9, 65.9, 67.6, 69.2, 70.6, 72.0, 73.3, 74.5,
            75.7, 76.9, 78.0, 79.1, 80.2, 81.2, 82.3, 83.2, 84.2, 85.1, 86.0, 86.9
        ];

        for ($i = 0; $i < 24; $i++) {
            $bulan = ($i % 12) + 1;
            $tahun = $tahunMulai + floor($i / 12);

            TbULaki::create([
                'id_anak' => $idAnak,
                'tb' => $tbPerBulan[$i] + rand(-5, 5) / 10,
                'bulan' => $bulan,
                'tahun' => $tahun,
            ]);
        }
    }
}
