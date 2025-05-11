<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\Imunisasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imunisasi>
 */
class ImunisasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Imunisasi::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'id_vaksin' => $this->faker->numberBetween(1, 17),
            'tanggal' => $this->faker->dateTimeThisYear(),
            'paraf' => $this->faker->name(),
        ];
    }
}
