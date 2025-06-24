<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\RiwayatKelahiran;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class RiwayatKelahiranFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = RiwayatKelahiran::class;

    public function definition(): array
    {
        return [

            'id_anak' => $this->getForeignKeyId(Anak::class),
            'g' => $this->faker->randomDigitNotZero(),
            'p' => $this->faker->randomDigitNotZero(),
            'a' => $this->faker->randomDigitNotZero(),
            'tanggal_lahir' => $this->faker->dateTimeBetween('-10 years', 'now'),
            'persalinan' => $this->faker->randomElement(['Spontan', 'Sungsang']),
            'tindakan' => $this->faker->randomElement(['Ekstraksi Vakum', 'Ekstraksi Forsep', 'SC']),
            'penolong_persalinan' => $this->faker->randomElement(['Dokter Spesialis', 'Dokter', 'Bidan']),
            'cap_kaki_bayi' => $this->faker->imageUrl(),
            'tanggal_lahir' => fake()->dateTimeBetween('-60 days', 'now'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
