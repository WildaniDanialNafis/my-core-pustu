<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\TbULaki;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TbULaki>
 */
use Database\Factories\Traits\HasForeignKey;

class TbULakiFactory extends Factory
{
    use HasForeignKey;    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = TbULaki::class;

    public function definition(): array
    {
        return [
            'id_anak' => $this->getForeignKeyId(Anak::class),
            'tb' => $this->faker->randomFloat(2, 30, 120),
            'bulan' => $this->faker->numberBetween(0, 11),
            'tahun' => $this->faker->numberBetween(0, 5),
        ];
    }
}
