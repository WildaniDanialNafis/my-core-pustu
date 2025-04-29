<?php

namespace Database\Factories;

use App\Models\PelayananSdidtk;
use App\Models\PenyimpanganPerkembangan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PenyimpanganPerkembangan>
 */
class PenyimpanganPerkembanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PenyimpanganPerkembangan::class;

    public function definition(): array
    {
        return [
            'id_pelayanan_sdidtk' => PelayananSdidtk::factory(),
            'kpsp' => $this->faker->randomElement(['Ds', 'Dm', 'Dp']),
            'tdd' => $this->faker->randomElement(['N', 'R']),
            'tdl' => $this->faker->randomElement(['N', 'R']),
        ];
    }
}
