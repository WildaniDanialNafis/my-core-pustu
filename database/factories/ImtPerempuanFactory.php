<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\ImtPerempuan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ImtPerempuan>
 */
class ImtPerempuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = ImtPerempuan::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'imt' => $this->faker->randomFloat(2, 10, 30), // Nilai IMT dalam rentang umum anak
            'bulan' => $this->faker->numberBetween(0, 11),
            'tahun' => $this->faker->numberBetween(0, 5),
        ];
    }
}
