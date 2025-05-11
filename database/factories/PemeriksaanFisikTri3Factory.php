<?php

namespace Database\Factories;

use App\Models\PemeriksaanFisikTri3;
use App\Models\PemeriksaanTrimester3;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemeriksaanFisikTri3>
 */
class PemeriksaanFisikTri3Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PemeriksaanFisikTri3::class;

    public function definition(): array
    {
        $normalOptions = ['Normal', 'Tidak Normal'];

        return [
            'id_pemeriksaan_trimester3' => PemeriksaanTrimester3::factory(),
            'keadaan_umum' => $this->faker->randomElement(['Baik', 'Sedang', 'Buruk']),
            'konjuctiva' => $this->faker->randomElement($normalOptions),
            'sklera' => $this->faker->randomElement($normalOptions),
            'gigi_mulut' => $this->faker->randomElement($normalOptions),
            'tht' => $this->faker->randomElement($normalOptions),
            'leher' => $this->faker->randomElement($normalOptions),
            'jantung' => $this->faker->randomElement($normalOptions),
            'paru' => $this->faker->randomElement($normalOptions),
            'perut' => $this->faker->randomElement($normalOptions),
            'tungkai' => $this->faker->randomElement($normalOptions),
        ];
    }
}
