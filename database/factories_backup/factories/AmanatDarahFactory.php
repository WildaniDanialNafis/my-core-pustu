<?php

namespace Database\Factories;

use App\Models\AmanatDarah;
use App\Models\MenyambutPersalinan;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class AmanatDarahFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = AmanatDarah::class;

    public function definition(): array
    {
        return [
            'id_menyambut_persalinan' => $this->getForeignKeyId(MenyambutPersalinan::class),
            'nama' => $this->faker->name(),
            'hp' => $this->faker->numerify('08##########'),
        ];
    }
}
