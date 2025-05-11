<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\NasihatAnak;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NasihatAnak>
 */
class NasihatAnakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = NasihatAnak::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'id_umur_nasihat_anak' => $this->faker->numberBetween(1, 7),
            'nasihat' => $this->faker->sentence(8),
            'tanggal' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
