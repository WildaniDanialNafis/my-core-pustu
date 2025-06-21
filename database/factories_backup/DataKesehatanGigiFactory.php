<?php

namespace Database\Factories;

use App\Models\DataKesehatanGigi;
use App\Models\KesehatanGigi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataKesehatanGigi>
 */
use Database\Factories\Traits\HasForeignKey;

class DataKesehatanGigiFactory extends Factory
{
    use HasForeignKey;    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = DataKesehatanGigi::class;

    public function definition(): array
    {
        return [
            'id_kesehatan_gigi' => $this->getForeignKeyId(KesehatanGigi::class),
            'pemeriksaan' => $this->faker->dateTime(),
            'jumlah_gigi' => $this->faker->numberBetween(0, 32),
            'jumlah_gigi_berlubang' => $this->faker->numberBetween(0, 32),
            'plak' => $this->faker->randomElement(['Bersih', 'Kotor']),
            'risiko_gigi_berlubang' => $this->faker->randomElement(['Tinggi', 'Sedang', 'Rendah']),
        ];
    }
}
