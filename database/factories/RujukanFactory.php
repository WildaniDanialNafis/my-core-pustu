<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\Rujukan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rujukan>
 */
class RujukanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Rujukan::class;

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'rujukan' => $this->faker->sentence(),
            'tanggal_umpan_balik' => $this->faker->optional()->dateTime(),
            'diagnosis_akhir_balik' => $this->faker->sentence(),
            'resume_umpan_balik' => $this->faker->paragraph(),
            'anjuran' => $this->faker->randomElement(['FKTP', 'FKRTL']),
        ];
    }
}
