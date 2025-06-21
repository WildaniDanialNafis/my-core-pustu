<?php

namespace Database\Factories;

use App\Models\PelayananSdidtk;
use App\Models\PenyimpanganPerkembangan;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenyimpanganPerkembanganFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PenyimpanganPerkembangan::class;

    public function definition(): array
    {
        return [
            'id_pelayanan_sdidtk' => $this->getForeignKeyId(PelayananSdidtk::class),
            'kpsp' => $this->faker->randomElement(['Ds', 'Dm', 'Dp']),
            'tdd' => $this->faker->randomElement(['N', 'R']),
            'tdl' => $this->faker->randomElement(['N', 'R']),
        ];
    }
}
