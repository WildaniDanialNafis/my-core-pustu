<?php

namespace Database\Factories;

use App\Models\DataKmsLaki;
use App\Models\KmsLaki;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataKmsLaki>
 */
class DataKmsLakiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = DataKmsLaki::class;

    public function definition(): array
    {
        return [
            'id_kms_laki' => KmsLaki::factory(),
            'umur' => $this->faker->numberBetween(0, 60),
            'bulan_penimbangan' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'bb' => $this->faker->randomFloat(2, 2, 20),
            'kbm' => $this->faker->randomFloat(2, 10, 25),
            'n_t' => $this->faker->randomElement(['N', 'T']),
            'asi_eksklusif' => $this->faker->randomElement(['Ya', 'Tidak']),
        ];
    }
}
