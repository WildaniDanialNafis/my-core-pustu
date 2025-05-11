<?php

namespace Database\Factories;

use App\Models\PemeriksaanTrimester1;
use App\Models\UsgTri1;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsgTri1>
 */
class UsgTri1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = UsgTri1::class; 

    public function definition(): array
    {
        return [
            'id_pemeriksaan_trimester1' => PemeriksaanTrimester1::factory(),
            'hpht' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'usia_kehamilan' => $this->faker->numberBetween(4, 13),
            'gestational_sac' => $this->faker->randomFloat(2, 1, 10),
            'crown_rump_length' => $this->faker->randomFloat(2, 1, 10),
            'denyut_jantung_janin' => $this->faker->numberBetween(110, 160),
            'sesuai_usia_kehamilan' => $this->faker->randomElement([0, 1]),
            'letak_janin' => $this->faker->randomElement(['intrauterin', 'ekstrauterin']),
            'taksiran_persalinan' => $this->faker->date('Y-m-d'),
            'hasil_usg' => $this->faker->sentence(),
        ];
    }
}
