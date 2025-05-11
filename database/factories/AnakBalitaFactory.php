<?php

namespace Database\Factories;

use App\Models\Anak;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnakBalita>
 */
class AnakBalitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'tipe' => $this->faker->randomElement(['0-1', '1-2', '2-3', '3-4', '4-5']),
            'tanggal' => $this->faker->dateTime(),
            'tempat' => $this->faker->city(),
            'bb' => $this->faker->randomFloat(2, 5.0, 20.0),
            'pb' => $this->faker->randomFloat(1, 60.0, 110.0),
            'lk' => $this->faker->randomFloat(1, 30.0, 55.0),
            'perkembangan' => $this->faker->sentence(),
            'kie' => $this->faker->word(),
            'imunisasi' => $this->faker->word(),
            'vit_a' => $this->faker->word(),
            'obat_cacing' => $this->faker->word(),
            'ppia1' => $this->faker->word(),
            'ppia2' => $this->faker->word(),
            'ppia3' => $this->faker->word(),
        ];
    }
}
