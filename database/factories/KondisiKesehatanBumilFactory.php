<?php

namespace Database\Factories;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\KondisiKesehatanBumil;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KondisiKesehatanBumil>
 */
class KondisiKesehatanBumilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = KondisiKesehatanBumil::class;

    public function definition(): array
    {
        return [
            'id_evaluasi_kesehatan_bumil' => EvaluasiKesehatanBumil::factory(),
            'tanggal_periksa' => $this->faker->date(),
            'tb' => $this->faker->randomFloat(2, 140, 180),
            'bb' => $this->faker->randomFloat(2, 40, 100),
            'lila' => $this->faker->randomFloat(2, 20, 35),
            'imt' => $this->faker->randomFloat(2, 15, 30),
            'status' => $this->faker->randomElement(['Kurus', 'Normal', 'Gemuk', 'Obesitas']),
        ];
    }
}
