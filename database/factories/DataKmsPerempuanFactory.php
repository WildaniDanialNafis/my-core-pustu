<?php

namespace Database\Factories;

use App\Models\DataKmsPerempuan;
use App\Models\KmsPerempuan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataKmsPerempuan>
 */
class DataKmsPerempuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = DataKmsPerempuan::class;

    public function definition(): array
    {
        return [
            'id_kms_perempuan' => KmsPerempuan::factory(),
            'umur' => $this->faker->numberBetween(0, 60),
            'bulan_penimbangan' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'bb' => $this->faker->randomFloat(2, 2, 15),
            'kbm' => $this->faker->randomFloat(2, 2, 15),
            'n_t' => $this->faker->randomElement(['N', 'T']),
            'asi_eksklusif' => $this->faker->word(),
        ];
    }
}
