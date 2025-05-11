<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\KesehatanGigi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KesehatanGigi>
 */
class KesehatanGigiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = KesehatanGigi::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'nama' => $this->faker->name(),
            'umur' => $this->faker->numberBetween(1, 18),
        ];
    }
}
