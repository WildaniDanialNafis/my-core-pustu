<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\KesehatanGigi;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class KesehatanGigiFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = KesehatanGigi::class;

    public function definition(): array
    {
        return [
            'id_anak' => $this->getForeignKeyId(Anak::class),
            'nama' => $this->faker->name(),
            'umur' => $this->faker->numberBetween(1, 18),
        ];
    }
}
