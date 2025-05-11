<?php

namespace Database\Factories;

use App\Models\PelayananSdidtk;
use App\Models\PenyimpanganPertumbuhan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PenyimpanganPertumbuhan>
 */
class PenyimpanganPertumbuhanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PenyimpanganPertumbuhan::class;

    public function definition(): array
    {
        return [
            'id_pelayanan_sdidtk' => PelayananSdidtk::factory(),
            'bb_u' => $this->faker->randomElement(['SK', 'K', 'N', 'RBBL']),
            'bb_tb' => $this->faker->randomElement(['Gb', 'Gk', 'Gn', 'Gl', 'O']),
            'tb_u' => $this->faker->randomElement(['SP', 'P', 'Tn', 'Ti']),
            'lk_u' => $this->faker->randomElement(['Mi', 'N', 'Ma']),
        ];
    }
}
