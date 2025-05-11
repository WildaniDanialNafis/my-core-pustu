<?php

namespace Database\Factories;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\Ibu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluasiKesehatanBumil>
 */
class EvaluasiKesehatanBumilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = EvaluasiKesehatanBumil::class;

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'nama_dokter' => $this->faker->name(),
            'faskes' => $this->faker->company(),
        ];
    }
}
