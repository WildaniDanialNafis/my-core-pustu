<?php

namespace Database\Seeders;

use App\Models\KriteriaPemeriksaanFisik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaPemeriksaanFisikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kriteria_pemeriksaan_fisik' => 'Mean Arterial Preasure (MAP) >= 90 mmHg **'],
            ['kriteria_pemeriksaan_fisik' => 'Proteinuria (urin celup > 1 pada 2 kali pemeriksaan berjarak 6 jam atau segera kuantitatif 300 mg / 24 jam)'],
        ];

        foreach ($data as $item) {
            KriteriaPemeriksaanFisik::create($item);
        }
    }
}
