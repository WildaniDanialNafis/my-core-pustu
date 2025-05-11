<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\KesehatanNifas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KesehatanNifas>
 */
class KesehatanNifasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = KesehatanNifas::class;

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'tanggal_periksa' => $this->faker->date(),
            'tempat' => $this->faker->randomElement(['Rumah', 'Puskesmas', 'Klinik']),
            'periksa_payudara' => $this->faker->sentence(),
            'periksa_pendarahan' => $this->faker->sentence(),
            'periksa_jalan_lahir' => $this->faker->sentence(),
            'vitamin_a' => $this->faker->randomElement(['Diberikan', 'Tidak Diberikan']),
            'kb_pasca_persalinan' => $this->faker->randomElement(['Pil', 'IUD', 'Suntik', 'Implan', 'Tidak']),
            'konseling' => $this->faker->randomElement(['Ya', 'Tidak']),
            'test_laksana_kasus' => $this->faker->paragraph(),
        ];
    }
}
