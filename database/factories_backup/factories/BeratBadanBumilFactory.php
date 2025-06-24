<?php

namespace Database\Factories;

use App\Models\BeratBadanBumil;
use App\Models\Ibu;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeratBadanBumilFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = BeratBadanBumil::class;

    public function definition(): array
    {
        return [
            'id_ibu' => $this->getForeignKeyId(Ibu::class),
            'minggu' => $this->faker->numberBetween(1, 42),
            'berat_badan' => $this->faker->randomFloat(1, 40, 120),
        ];
    }
}
