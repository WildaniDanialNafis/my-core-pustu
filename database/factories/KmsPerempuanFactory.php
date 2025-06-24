<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\KmsPerempuan;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class KmsPerempuanFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = KmsPerempuan::class;

    public function definition(): array
    {
        return [

            'id_anak' => $this->getForeignKeyId(Anak::class),
            'nama_anak' => $this->faker->name(),
            'nama_posyandu' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
