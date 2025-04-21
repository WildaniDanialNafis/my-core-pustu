<?php

namespace Database\Factories;

use App\Models\PreeklampsiaAnamnesis;
use App\Models\SkriningPreeklampsia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PreeklampsiaAnamnesis>
 */
class PreeklampsiaAnamnesisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PreeklampsiaAnamnesis::class;

    public function definition(): array
    {
        return [
            'id_skrining_preeklampsia' => SkriningPreeklampsia::factory(),
            'id_kriteria_anamnesis' => $this->faker->numberBetween(1, 14),
            'risiko' => $this->faker->randomElement(['', 'Risiko sedang', 'Risiko tinggi']),
        ];
    }
}
