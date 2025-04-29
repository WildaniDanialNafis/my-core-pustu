<?php

namespace Database\Seeders;

use App\Models\Vaksin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaksinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['vaksin' => 'Hepatitis B (< 24 jam)'],
            ['vaksin' => 'BCG'],
            ['vaksin' => 'Polio tetes 1'],
            ['vaksin' => 'DPT - HB - Hib 1'],
            ['vaksin' => 'Polio tetes 2'],
            ['vaksin' => 'DPT - HB - Hib 2'],
            ['vaksin' => 'Polio tetes 3'],
            ['vaksin' => 'DPT - HB - Hib 3'],
            ['vaksin' => 'Polio tetes 4'],
            ['vaksin' => 'Polio suntik (IPV)'],
            ['vaksin' => 'Campak - Rubella (MR)'],
            ['vaksin' => 'DPT - Hib - HB lanjutan'],
            ['vaksin' => 'Campak Rubella (MR) lanjutan'],
            ['vaksin' => 'PCV 1'],
            ['vaksin' => 'PCV 2'],
            ['vaksin' => 'Japanese Enchepalitis'],
            ['vaksin' => 'PCV 3'],
        ];

        foreach ($data as $item) {
            Vaksin::create($item);
        }
    }
}
