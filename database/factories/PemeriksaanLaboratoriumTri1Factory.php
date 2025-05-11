<?php

namespace Database\Factories;

use App\Models\PemeriksaanLaboratoriumTri1;
use App\Models\PemeriksaanTrimester1;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemeriksaanLaboratoriumTri1>
 */
class PemeriksaanLaboratoriumTri1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PemeriksaanLaboratoriumTri1::class;

    public function definition(): array
    {
        $reaktif = ['R', 'NR'];

        return [
            'id_pemeriksaan_trimester1' => PemeriksaanTrimester1::factory(),
            'tanggal' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'hemoglobin' => $this->faker->randomFloat(1, 8, 15),
            'tindak_hemoglobin' => $this->faker->sentence(),
            'goldar' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'rhesus' => $this->faker->randomElement(['+', '-']),
            'tindak_goldar_rhesus' => $this->faker->sentence(),
            'gula_darah_sewaktu' => $this->faker->randomFloat(1, 70, 200),
            'tindak_gula_darah' => $this->faker->sentence(),
            'ppia' => $this->faker->word(),
            'tindak_ppia' => $this->faker->sentence(),
            'h' => $this->faker->randomElement($reaktif),
            'tindak_h' => $this->faker->sentence(),
            's' => $this->faker->randomElement($reaktif),
            'tindak_s' => $this->faker->sentence(),
            'hepatitis_b' => $this->faker->randomElement($reaktif),
            'tindak_hepatitis_b' => $this->faker->sentence(),
            'lain_lain' => $this->faker->sentence(),
            'tindak_lain_lain' => $this->faker->sentence(),
        ];
    }
}
