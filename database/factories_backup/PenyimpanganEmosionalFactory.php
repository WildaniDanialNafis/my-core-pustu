<?php

namespace Database\Factories;

use App\Models\PelayananSdidtk;
use App\Models\PenyimpanganEmosional;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PenyimpanganEmosional>
 */
use Database\Factories\Traits\HasForeignKey;

class PenyimpanganEmosionalFactory extends Factory
{
    use HasForeignKey;    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PenyimpanganEmosional::class;

    public function definition(): array
    {
        return [
            'id_pelayanan_sdidtk' => $this->getForeignKeyId(PelayananSdidtk::class),
            'kmpe' => $this->faker->randomElement(['N', 'R']),
            'm_chat' => $this->faker->randomElement(['N', 'R']),
            'gpph' => $this->faker->randomElement(['N', 'R']),
        ];
    }
}
