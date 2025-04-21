<?php

namespace Database\Factories;

use App\Models\BeratBadanBumil;
use App\Models\Ibu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BeratBadanBumil>
 */
class BeratBadanBumilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = BeratBadanBumil::class; 

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'minggu' => $this->faker->numberBetween(1, 42),
            'berat_badan' => $this->faker->randomFloat(1, 40, 120),
        ];
    }
}
