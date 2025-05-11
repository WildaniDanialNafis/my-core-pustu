<?php

namespace Database\Factories;

use App\Models\AmanatDarah;
use App\Models\MenyambutPersalinan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AmanatDarah>
 */
class AmanatDarahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = AmanatDarah::class;

    public function definition(): array
    {
        return [
            'id_menyambut_persalinan' => MenyambutPersalinan::factory(),
            'nama' => $this->faker->name(),
            'hp' => $this->faker->numerify('08##########'),
        ];
    }
}
