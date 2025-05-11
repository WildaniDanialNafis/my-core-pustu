<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\BbTbPerempuan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BbTbPerempuan>
 */
class BbTbPerempuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = BbTbPerempuan::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'bb' => $this->faker->randomFloat(2, 2, 20),
            'tb' => $this->faker->randomFloat(2, 40, 120),
        ];
    }
}
