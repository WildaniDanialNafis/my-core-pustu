<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\RingkasanNifas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RingkasanNifas>
 */
class RingkasanNifasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = RingkasanNifas::class;

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'kf' => $this->faker->randomElement(['KF1', 'KF2', 'KF3', 'KF4']),
            'tanggal' => $this->faker->dateTime(),
            'faskes' => $this->faker->company(),
            'klasifikasi' => $this->faker->sentence(),
            'tindakan' => $this->faker->sentence(),
        ];
    }
}
