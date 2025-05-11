<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\KesehatanBersalin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KesehatanBersalin>
 */
class KesehatanBersalinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = KesehatanBersalin::class;

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'taksiran_persalinan' => $this->faker->word(),
            'fasyankes' => $this->faker->company(),
            'rujukan' => $this->faker->word(),
            'inisiasi_menyusui_dini' => $this->faker->paragraph(),
        ];
    }
}
