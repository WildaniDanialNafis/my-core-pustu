<?php

namespace Database\Factories;

use App\Models\PemeriksaanFisikTri1;
use App\Models\PemeriksaanTrimester1;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemeriksaanFisikTri1>
 */
class PemeriksaanFisikTri1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PemeriksaanFisikTri1::class; 

    public function definition(): array
    {
        $status = ['Normal', 'Tidak Normal'];

        return [
            'id_pemeriksaan_trimester1' => PemeriksaanTrimester1::factory(),
            'keadaan_umum' => $this->faker->sentence(),
            'konjuctiva' => $this->faker->randomElement($status),
            'sklera' => $this->faker->randomElement($status),
            'kulit' => $this->faker->randomElement($status),
            'leher' => $this->faker->randomElement($status),
            'gigi_mulut' => $this->faker->randomElement($status),
            'tht' => $this->faker->randomElement($status),
            'jantung' => $this->faker->randomElement($status),
            'paru' => $this->faker->randomElement($status),
            'perut' => $this->faker->randomElement($status),
            'tungkai' => $this->faker->randomElement($status),
        ];
    }
}
