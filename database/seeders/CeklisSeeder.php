<?php

namespace Database\Seeders;

use App\Models\Ceklis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CeklisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['ceklis' => '29 hari - 3 bulan'],
            ['ceklis' => '3 - 6 bulan'],
            ['ceklis' => '6 - 9 bulan'],
            ['ceklis' => '9 - 12 bulan'],
            ['ceklis' => '12 - 18 bulan'],
            ['ceklis' => '18 - 24 bulan'],
            ['ceklis' => '2 - 3 tahun'],
            ['ceklis' => '3 - 4 tahun'],
            ['ceklis' => '4 - 5 tahun'],
            ['ceklis' => '5 - 6 tahun'],
        ];

        foreach ($data as $item) {
            Ceklis::create($item);
        }
    }
}
