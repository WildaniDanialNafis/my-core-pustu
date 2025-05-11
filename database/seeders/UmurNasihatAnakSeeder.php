<?php

namespace Database\Seeders;

use App\Models\UmurNasihatAnak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmurNasihatAnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['umur' => '0 - 6 bulan'],
            ['umur' => '6 - 11 bulan'],
            ['umur' => '12 - 23 bulan'],
            ['umur' => '2 - 3 tahun'],
            ['umur' => '3 - 4 tahun'],
            ['umur' => '4 - 5 tahun'],
            ['umur' => '5 - 6 tahun'],
        ];

        foreach ($data as $item) {
            UmurNasihatAnak::create($item);
        }
    }
}
