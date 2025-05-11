<?php

namespace Database\Factories;

use App\Models\Kesehatan1;
use App\Models\Kesehatan2;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kesehatan2>
 */
class Kesehatan2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Kesehatan2::class;

    public function definition(): array
    {
        return [
            'id_kesehatan1' => Kesehatan1::factory(),
            'trimester' => $this->faker->randomElement(['1', '2', '3']),
            'tanggal_periksa' => $this->faker->date(),
            'tempat' => $this->faker->company(),
            'timbang' => $this->faker->randomFloat(2, 40, 100),
            'ukur_lingkar_lengan_atas' => $this->faker->randomFloat(2, 20, 40),
            'tekanan_darah_sistolik' => $this->faker->numberBetween(90, 180),
            'tekanan_darah_diastolik' => $this->faker->numberBetween(60, 120),
            'periksa_tinggi_rahim' => $this->faker->randomFloat(2, 10, 30),
            'periksa_letak_dan_denyut_jantung_janin' => $this->faker->text(100),
            'konseling' => $this->faker->text(),
            'skrining_dokter' => $this->faker->text(),
            'tablet_tambah_darah' => $this->faker->randomElement(['Ya', 'Tidak']),
            'test_lab_hemoglobin' => $this->faker->randomFloat(2, 7, 16),
            'test_golongan_darah' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'test_lab_protein_urine' => $this->faker->randomElement(['Positif', 'Negatif']),
            'test_lab_gula_darah' => $this->faker->randomFloat(2, 70, 150),
            'ppia1' => $this->faker->word(),
            'ppia2' => $this->faker->word(),
            'ppia3' => $this->faker->word(),
            'test_laksana_kasus' => $this->faker->text(),
        ];
    }
}
