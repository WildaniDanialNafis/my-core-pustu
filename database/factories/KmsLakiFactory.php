<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\KmsLaki;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class KmsLakiFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = KmsLaki::class;

    public function definition(): array
    {
        return [

            'id_anak' => $this->getForeignKeyId(Anak::class),
            'nama_anak' => $this->faker->name('male'),
            'nama_posyandu' => $this->faker->company(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
