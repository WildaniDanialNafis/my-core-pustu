<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\Rujukan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rujukan>
 */
use Database\Factories\Traits\HasForeignKey;

class RujukanFactory extends Factory
{
    use HasForeignKey;    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Rujukan::class;

    public function definition(): array
    {
        return [
            'id_ibu' => $this->getForeignKeyId(Ibu::class),
            'rujukan' => $this->faker->sentence(),
            'tanggal_umpan_balik' => $this->faker->optional()->dateTime(),
            'diagnosis_akhir_balik' => $this->faker->sentence(),
            'resume_umpan_balik' => $this->faker->paragraph(),
            'anjuran' => $this->faker->randomElement(['FKTP', 'FKRTL']),
        ];
    }
}
