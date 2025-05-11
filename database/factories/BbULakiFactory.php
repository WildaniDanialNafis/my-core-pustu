<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\BbULaki;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BbULaki>
 */
class BbULakiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = BbULaki::class;

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
