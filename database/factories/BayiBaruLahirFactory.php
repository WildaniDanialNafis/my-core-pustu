<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\BayiBaruLahir;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BayiBaruLahir>
 */
class BayiBaruLahirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = BayiBaruLahir::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'kn' => $this->faker->randomElement(['0', '1', '2', '3']),
            'tanggal' => $this->faker->dateTime(),
            'tempat' => $this->faker->city(),
            'perawatan_tali_pusat' => $this->faker->sentence(),
            'imd' => $this->faker->word(),
            'vitamin_k1' => $this->faker->word(),
            'imunisasi_hepatitis_b' => $this->faker->word(),
            'jenis_salep' => $this->faker->randomElement(['Salep', 'Tetes Mata Antibiotik']),
            'salep' => $this->faker->word(),
            'jenis_skrining' => $this->faker->randomElement(['Skrining BBL', 'SHK']),
            'status_skrining' => $this->faker->word(),
            'kie' => $this->faker->word(),
            'ppia1' => $this->faker->word(),
            'ppia2' => $this->faker->word(),
            'ppia3' => $this->faker->word(),
        ];
    }
}
