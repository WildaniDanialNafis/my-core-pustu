<?php

namespace Database\Factories;

use App\Models\AmanatKendaraan;
use App\Models\MenyambutPersalinan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AmanatKendaraan>
 */
use Database\Factories\Traits\HasForeignKey;

class AmanatKendaraanFactory extends Factory
{
    use HasForeignKey;    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = AmanatKendaraan::class;

    public function definition(): array
    {
        return [
            'id_menyambut_persalinan' => $this->getForeignKeyId(MenyambutPersalinan::class),
            'kendaraan' => $this->faker->randomElement(['Kendaraan', 'Ambulan Desa']),
            'nama' => $this->faker->name(),
            'hp' => $this->faker->numerify('08##########'),
        ];
    }
}
