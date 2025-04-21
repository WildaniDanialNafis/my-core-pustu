<?php

namespace Database\Factories;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\RiwayatKehamilan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiwayatKehamilan>
 */
class RiwayatKehamilanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = RiwayatKehamilan::class;

    public function definition(): array
    {
        return [
            'id_evaluasi_kesehatan_bumil' => EvaluasiKesehatanBumil::factory(),
            'tahun' => $this->faker->dateTimeBetween('-10 years', 'now'),
            'berat_lahir' => $this->faker->randomFloat(1, 2.0, 5.0),
            'persalinan' => $this->faker->randomElement(['Normal', 'Caesar', 'Vacuum']),
            'penolong_persalinan' => $this->faker->randomElement(['Dokter', 'Bidan', 'Dukun']),
            'komplikasi' => $this->faker->optional()->sentence,
        ];
    }
}
