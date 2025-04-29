<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\KapsulAnak;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KapsulAnak>
 */
class KapsulAnakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = KapsulAnak::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'id_umur_kapsul_anak' => $this->faker->numberBetween(1, 5),
            'kapsul' => $this->faker->randomElement(['Biru', 'Merah']),
            'februari' => $this->faker->optional()->dateTimeBetween('-1 year', 'now'),
            'agustus' => $this->faker->optional()->dateTimeBetween('-1 year', 'now'),
            'obat_cacing' => $this->faker->optional()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
