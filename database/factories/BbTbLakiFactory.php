<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\BbTbLaki;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BbTbLaki>
 */
class BbTbLakiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = BbTbLaki::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'bb' => $this->faker->randomFloat(2, 2, 20),
            'tb' => $this->faker->randomFloat(2, 30, 120),
        ];
    }
}
