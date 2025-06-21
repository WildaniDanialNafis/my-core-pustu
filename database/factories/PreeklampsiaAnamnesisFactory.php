<?php

namespace Database\Factories;

use App\Models\PreeklampsiaAnamnesis;
use App\Models\SkriningPreeklampsia;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class PreeklampsiaAnamnesisFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PreeklampsiaAnamnesis::class;

    public function definition(): array
    {
        return [
            'id_skrining_preeklampsia' => $this->getForeignKeyId(SkriningPreeklampsia::class),
            'id_kriteria_anamnesis' => $this->faker->numberBetween(1, 14),
            'risiko' => $this->faker->randomElement(['', 'Risiko sedang', 'Risiko tinggi']),
        ];
    }
}
