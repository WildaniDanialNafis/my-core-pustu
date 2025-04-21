<?php

namespace Database\Seeders;

use App\Models\KriteriaAnamnesis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaAnamnesisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kriteria_anamnesis' => 'Multipara dengan kehamilan oleh pasangan baru'],
            ['kriteria_anamnesis' => 'Kehamilan dengan teknologi reproduksi berbantu: bayi tabung, obat induksi ovulasi'],
            ['kriteria_anamnesis' => 'Umur >= 35'],
            ['kriteria_anamnesis' => 'Nulipra'],
            ['kriteria_anamnesis' => 'Multipara yang jarak kehamilan sebelumnya > 10 tahun'],
            ['kriteria_anamnesis' => 'Riwayat preeklampsia pada ibu atau saudara perempuan'],
            ['kriteria_anamnesis' => 'Obesitas sebelum hamil (IMT > 30 kg/m2)'],
            ['kriteria_anamnesis' => 'Multipara dengan riwayat preeklampsia sebelumnya'],
            ['kriteria_anamnesis' => 'Kehamilan multiple'],
            ['kriteria_anamnesis' => 'Diabetes dalam kehamilan'],
            ['kriteria_anamnesis' => 'Hipertensi kronik'],
            ['kriteria_anamnesis' => 'Penyakit ginjal'],
            ['kriteria_anamnesis' => 'Penyakit autoimun, SLE'],
            ['kriteria_anamnesis' => 'Anti phpspholipid syndrome*'],
        ];

        foreach ($data as $item) {
            KriteriaAnamnesis::create($item);
        }
    }
}
