<?php

namespace Database\Factories;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\RiwayatPenyakitKeluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiwayatPenyakitKeluarga>
 */
class RiwayatPenyakitKeluargaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $table = RiwayatPenyakitKeluarga::class;

    public function definition(): array
    {
        return [
            'id_evaluasi_kesehatan_bumil' => EvaluasiKesehatanBumil::factory(),
            'riwayat_penyakit' => $this->faker->randomElement([
                'Hipertensi', 'Diabetes', 'Sesak Nafas', 'Jantung', 'TB', 
                'Alergi', 'Jiwa', 'Kelainan Darah', 'Hepatitis B'
            ]),
            'penjelasan' => $this->faker->optional()->sentence(),
        ];
    }
}
