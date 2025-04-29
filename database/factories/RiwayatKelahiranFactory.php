<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\RiwayatKelahiran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiwayatKelahiran>
 */
class RiwayatKelahiranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = RiwayatKelahiran::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'g' => $this->faker->randomDigitNotZero(),
            'p' => $this->faker->randomDigitNotZero(),
            'a' => $this->faker->randomDigitNotZero(),
            'tanggal_lahir' => $this->faker->dateTimeBetween('-10 years', 'now'),
            'persalinan' => $this->faker->randomElement(['Spontan', 'Sungsang']),
            'tindakan' => $this->faker->randomElement(['Ekstraksi Vakum', 'Ekstraksi Forsep', 'SC']),
            'penolong_persalinan' => $this->faker->randomElement(['Dokter Spesialis', 'Dokter', 'Bidan']),
            'cap_kaki_bayi' => $this->faker->imageUrl(),
        ];
    }
}
