<?php

namespace Database\Factories;

use App\Models\Ibu;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class Kesehatan1Factory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'id_ibu' => $this->getForeignKeyId(Ibu::class),
            'hpht' => $this->faker->date(),
            'bb' => $this->faker->numberBetween(40, 100),
            'tb' => $this->faker->numberBetween(140, 180),
            'imt' => $this->faker->randomFloat(2, 18.5, 30),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
