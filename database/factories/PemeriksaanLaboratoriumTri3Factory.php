<?php

namespace Database\Factories;

use App\Models\PemeriksaanLaboratoriumTri3;
use App\Models\PemeriksaanTrimester3;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemeriksaanLaboratoriumTri3>
 */
class PemeriksaanLaboratoriumTri3Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PemeriksaanLaboratoriumTri3::class;

    public function definition(): array
    {
        return [
            'id_pemeriksaan_trimester3' => PemeriksaanTrimester3::factory(),
            'tanggal' => $this->faker->dateTimeBetween('-9 months', 'now'),
            'hemoglobin' => $this->faker->randomFloat(1, 6.0, 18.0),
            'tindak_hemoglobin' => $this->faker->optional()->sentence(),
            'gula_darah_puasa' => $this->faker->randomFloat(1, 60, 130),
            'tindak_gula_puasa' => $this->faker->optional()->sentence(),
            'gula_darah_2_jam_post_pradinal' => $this->faker->randomFloat(1, 80, 200),
            'tindak_gula_darah_2_jam_post_pradinal' => $this->faker->optional()->sentence(),
        ];
    }
}
