<?php

namespace Database\Factories;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\RiwayatKesehatanBumil;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiwayatKesehatanBumil>
 */
class RiwayatKesehatanBumilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = RiwayatKesehatanBumil::class;

    public function definition(): array
    {
        return [
            'id_evaluasi_kesehatan_bumil' => EvaluasiKesehatanBumil::factory(),
            'riwayat_penyakit' => $this->faker->sentence(3),
        ];
    }
}
