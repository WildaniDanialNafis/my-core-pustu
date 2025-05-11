<?php

namespace Database\Factories;

use App\Models\EvaluasiKehamilan;
use App\Models\Ibu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluasiKehamilan>
 */
class EvaluasiKehamilanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = EvaluasiKehamilan::class; 

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'pemeriksa' => $this->faker->name,
            'tanggal' => $this->faker->dateTimeBetween('-9 months', 'now'),
            'usia_gestasi' => $this->faker->numberBetween(1, 40),
            'denyut_jantung_janin' => $this->faker->numberBetween(120, 160),
            'sistolik' => $this->faker->numberBetween(90, 140),
            'diastolik' => $this->faker->numberBetween(60, 90),
            'gerakan_bayi' => $this->faker->numberBetween(0, 20),
            'urin_protein' => $this->faker->numberBetween(0, 4),
            'urin_reduksi' => $this->faker->numberBetween(0, 4),
            'hemoglobin' => $this->faker->numberBetween(8, 15),
            'kalsium' => $this->faker->numberBetween(0, 1),
            'aspirin' => $this->faker->numberBetween(0, 1),
        ];
    }
}
