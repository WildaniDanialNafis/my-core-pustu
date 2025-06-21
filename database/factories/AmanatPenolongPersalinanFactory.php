<?php

namespace Database\Factories;

use App\Models\AmanatPenolongPersalinan;
use App\Models\MenyambutPersalinan;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class AmanatPenolongPersalinanFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = AmanatPenolongPersalinan::class;

    public function definition(): array
    {
        return [
            'id_menyambut_persalinan' => $this->getForeignKeyId(MenyambutPersalinan::class),
            'penolong_persalinan' => $this->faker->randomElement(['Dokter', 'Bidan']),
            'nama' => $this->faker->name(),
        ];
    }
}
