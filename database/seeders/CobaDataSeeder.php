<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CobaDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ibu')->insert([
            'id_user' => 2,
            'nama' => 'Dewi Sri', 
            'pembiayaan' => 'JKN',
            'no_jkn' => '0001234567890',
            'faskes_tk_1' => 'Puskesmas Sukamaju',
            'faskes_rujukan' => 'RSUD Dr. Slamet',
            'gol_darah' => 'O+',
            'tmpt_lahir' => 'Bandung',
            'tgl_lahir' => '1990-05-15',
            'pendidikan' => 'S1 Ekonomi',
            'pekerjaan' => 'Pegawai Negeri',
            'provinsi' => 'Jawa Barat',
            'kabupaten' => 'Bandung',
            'alamat' => 'Jl. Merdeka No. 123, Bandung',
            'telepon' => '081234567890',
            'puskesmas_domisili' => 'Puskesmas Sukamaju',
            'no_reg_kohort_ibu' => 'REG-20230415001',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
