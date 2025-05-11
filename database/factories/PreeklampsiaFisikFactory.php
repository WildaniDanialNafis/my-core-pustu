<?php

namespace Database\Factories;

use App\Models\PreeklampsiaFisik;
use App\Models\SkriningPreeklampsia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PreeklampsiaFisik>
 */
class PreeklampsiaFisikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PreeklampsiaFisik::class;

    public function definition(): array
    {
        return [
            'id_skrining_preeklampsia' => SkriningPreeklampsia::factory(),
            'id_kriteria_pemeriksaan_fisik' => $this->faker->numberBetween(1, 2),
            'risiko' => $this->faker->randomElement(['', 'Risiko sedang', 'Risiko tinggi']),
        ];
    }
}
