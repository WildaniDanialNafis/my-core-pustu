<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\BbUPerempuan;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class BbUPerempuanFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = BbUPerempuan::class;

    public function definition(): array
    {
        return [

            'id_anak' => $this->getForeignKeyId(Anak::class),
            'bb' => $this->faker->randomFloat(2, 2, 20),
            'bulan' => $this->faker->numberBetween(0, 11),
            'tahun' => $this->faker->numberBetween(0, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
