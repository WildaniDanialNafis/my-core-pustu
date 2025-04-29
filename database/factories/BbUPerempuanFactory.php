<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\BbUPerempuan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BbUPerempuan>
 */
class BbUPerempuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = BbUPerempuan::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'bb' => $this->faker->randomFloat(2, 2, 20),
            'bulan' => $this->faker->numberBetween(0, 11),
            'tahun' => $this->faker->numberBetween(0, 5),
        ];
    }
}
