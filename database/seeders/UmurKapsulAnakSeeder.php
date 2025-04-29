<?php

namespace Database\Seeders;

use App\Models\UmurKapsulAnak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmurKapsulAnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['umur' => '6 - 11 bulan'],
            ['umur' => '1 - 2 tahun'],
            ['umur' => '2 - 3 tahun'],
            ['umur' => '3 - 4 tahun'],
            ['umur' => '4 - 5 tahun'],
        ];

        foreach ($data as $item) {
            UmurKapsulAnak::create($item);
        }
    }
}
