<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\BbTbLaki;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class BbTbLakiFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = BbTbLaki::class;

    public function definition(): array
    {
        return [

            'id_anak' => $this->getForeignKeyId(Anak::class),
            'bb' => $this->faker->randomFloat(2, 2, 20),
            'tb' => $this->faker->randomFloat(2, 30, 120),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
