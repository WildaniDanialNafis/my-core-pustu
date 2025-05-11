<?php

namespace Database\Seeders;

use App\Models\BbTbPerempuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BbTbPerempuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idAnak = 1;

        // Data tinggi badan (cm)
        $tbPerBulan = [
            49.9, 54.7, 58.4, 61.4, 63.9, 65.9, 67.6, 69.2, 70.6, 72.0, 73.3, 74.5,
            75.7, 76.9, 78.0, 79.1, 80.2, 81.2, 82.3, 83.2, 84.2, 85.1, 86.0, 86.9
        ];

        // Data berat badan (kg)
        $bbPerBulan = [
            3.3, 4.5, 5.6, 6.4, 7.0, 7.5, 7.9, 8.3, 8.6, 8.9, 9.2, 9.4,
            9.6, 9.8, 10.0, 10.2, 10.4, 10.5, 10.7, 10.9, 11.0, 11.2, 11.3, 11.5
        ];

        for ($i = 0; $i < 24; $i++) {
            BbTbPerempuan::create([
                'id_anak' => $idAnak,
                'tb' => $tbPerBulan[$i] + rand(-5, 5) / 10,
                'bb' => $bbPerBulan[$i] + rand(-5, 5) / 10,
            ]);
        }
    }
}
