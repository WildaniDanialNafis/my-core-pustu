<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\KmsPerempuan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KmsPerempuan>
 */
class KmsPerempuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = KmsPerempuan::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'nama_anak' => $this->faker->name(),
            'nama_posyandu' => $this->faker->word(),
        ];
    }
}
