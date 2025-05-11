<?php

namespace Database\Factories;

use App\Models\PelayananSdidtk;
use App\Models\PenyimpanganEmosional;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PenyimpanganEmosional>
 */
class PenyimpanganEmosionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PenyimpanganEmosional::class;

    public function definition(): array
    {
        return [
            'id_pelayanan_sdidtk' => PelayananSdidtk::factory(),
            'kmpe' => $this->faker->randomElement(['N', 'R']),
            'm_chat' => $this->faker->randomElement(['N', 'R']),
            'gpph' => $this->faker->randomElement(['N', 'R']),
        ];
    }
}
