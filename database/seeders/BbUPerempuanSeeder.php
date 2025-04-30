<?php

namespace Database\Seeders;

use App\Models\BbUPerempuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BbUPerempuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idAnak = 1;
        $tahunMulai = 0;

        $bbPerBulan = [
            3.5, 4.5, 5.6, 6.4, 7.0, 7.5, 7.9, 8.3, 8.6, 8.9, 9.2, 9.4,
            9.6, 9.8, 10.0, 10.2, 10.4, 10.6, 10.8, 11.0, 11.3, 11.6, 11.9, 12.2
        ];

        for ($i = 0; $i < 24; $i++) {
            $bulan = ($i % 12) + 1;
            $tahun = $tahunMulai + floor($i / 12);

            BbUPerempuan::create([
                'id_anak' => $idAnak,
                'bb' => $bbPerBulan[$i] + rand(-3, 3) / 10,
                'bulan' => $bulan,
                'tahun' => $tahun,
            ]);
        }
    }
}
