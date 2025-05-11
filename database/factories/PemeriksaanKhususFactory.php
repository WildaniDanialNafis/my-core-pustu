<?php

namespace Database\Factories;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\PemeriksaanKhusus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemeriksaanKhusus>
 */
class PemeriksaanKhususFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PemeriksaanKhusus::class;

    public function definition(): array
    {
        return [
            'id_evaluasi_kesehatan_bumil' => EvaluasiKesehatanBumil::factory(),
            'inspekulo' => $this->faker->optional()->word(),
            'vulva' => $this->faker->randomElement(['Normal', 'Tidak Normal']),
            'uretra' => $this->faker->randomElement(['Normal', 'Tidak Normal']),
            'vagina' => $this->faker->randomElement(['Normal', 'Tidak Normal']),
            'fluksus' => $this->faker->randomElement(['+', '--']),
            'fluor' => $this->faker->randomElement(['+', '--']),
            'porsio' => $this->faker->randomElement(['Normal', 'Tidak Normal']),
        ];
    }
}
