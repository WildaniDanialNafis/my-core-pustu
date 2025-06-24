<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\LingkarKepalaPerempuan;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class LingkarKepalaPerempuanFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = LingkarKepalaPerempuan::class;

    public function definition(): array
    {
        return [
            'id_anak' => $this->getForeignKeyId(Anak::class),
            'lingkar_kepala' => $this->faker->randomFloat(2, 30, 50),
            'bulan' => $this->faker->numberBetween(0, 11),
            'tahun' => $this->faker->numberBetween(0, 5),
        ];
    }
}
