<?php

namespace Database\Seeders;

use App\Models\UmurSdidtk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmurSdidtkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['umur' => '3 bulan'],
            ['umur' => '6 bulan'],
            ['umur' => '9 bulan'],
            ['umur' => '12 bulan'],
            ['umur' => '15 bulan'],
            ['umur' => '18 bulan'],
            ['umur' => '21 bulan'],
            ['umur' => '24 bulan'],
            ['umur' => '30 bulan'],
            ['umur' => '36 bulan'],
            ['umur' => '42 bulan'],
            ['umur' => '48 bulan'],
            ['umur' => '54 bulan'],
            ['umur' => '60 bulan'],
            ['umur' => '72 bulan'],
        ];

        foreach ($data as $item) {
            UmurSdidtk::create($item);
        }
    }
}
