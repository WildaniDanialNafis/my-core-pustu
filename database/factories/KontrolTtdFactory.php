<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\KontrolTtd;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MinumTtd>
 */
class KontrolTtdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = KontrolTtd::class;

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'nama_pengontrol' => $this->faker->name(),
            'hubungan' => $this->faker->randomElement(['Suami', 'Ibu', 'Mertua', 'Tetangga', 'Teman']),
        ];
    }
}
