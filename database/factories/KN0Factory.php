<?php

namespace Database\Factories;

use App\Models\KN0;
use App\Models\PelayananKesehatanNeonatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KN0>
 */
class KN0Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = KN0::class;

    public function definition(): array
    {
        return [
            'id_pelayanan_kesehatan_neonatus' => PelayananKesehatanNeonatus::factory(),
            'kondisi' => $this->faker->word(),
            'bb' => $this->faker->randomFloat(2, 2, 5),
            'pb' => $this->faker->randomFloat(1, 40, 60),
            'lk' => $this->faker->randomFloat(1, 30, 40),
            'imd' => $this->faker->randomElement(['Ya', 'Tidak']),
            'vit_k1' => $this->faker->randomElement(['Ya', 'Tidak']),
            'salep' => $this->faker->randomElement(['Ya', 'Tidak']),
            'tetes_mata' => $this->faker->randomElement(['Ya', 'Tidak']),
            'imunisasi_hb' => $this->faker->randomElement(['Ya', 'Tidak']),
            'tanggal' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'nomor_batch' => $this->faker->bothify('BATCH-####'),
            'masalah' => $this->faker->sentence(),
            'dirujuk_ke' => $this->faker->company(),
            'nama_jelas_petugas' => $this->faker->name(),
        ];
    }
}
