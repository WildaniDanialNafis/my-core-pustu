<?php

namespace Database\Factories;

use App\Models\BayiLahir;
use App\Models\Ibu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BayiLahir>
 */
class BayiLahirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = BayiLahir::class;

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'anak_ke' => $this->faker->numberBetween(1, 5),
            'berat_lahir' => $this->faker->randomFloat(2, 2.0, 4.5),
            'panjang_badan' => $this->faker->randomFloat(1, 45, 55),
            'lingkar_kepala' => $this->faker->randomFloat(1, 30, 38),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan', 'Tidak Bisa Ditentukan']),
            'kondisi_bayi' => $this->faker->randomElement([
                'Segera menangis',
                'Menangis beberapa saat',
                'Tidak menangis',
                'Seluruh tubuh kemerahan',
                'Anggota gerak kebiruan',
                'Seluruh tubuh biru',
                'Kelainan bawaan',
                'Meninggal'
            ]),
            'keterangan_kondisi_bayi' => $this->faker->sentence(),
            'asuhan_bayi' => $this->faker->randomElement([
                'Inisiasi menyusu dini (IMD) dalam 1 jam pertama kelahiran bayi',
                'Suntikan vitamin K1',
                'Salep mata antibiotika profilaksis',
                'Imunisasi HB0'
            ]),
            'keterangan_tambahan' => $this->faker->paragraph(),
        ];
    }
}
