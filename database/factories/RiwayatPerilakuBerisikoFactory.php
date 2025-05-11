<?php

namespace Database\Factories;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\RiwayatPerilakuBerisiko;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiwayatPerilakuBerisiko>
 */
class RiwayatPerilakuBerisikoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = RiwayatPerilakuBerisiko::class;

    public function definition(): array
    {
        return [
            'id_evaluasi_kesehatan_bumil' => EvaluasiKesehatanBumil::factory(),
            'perilaku' => $this->faker->randomElement([
                'Merokok', 
                'Pola makan berisiko', 
                'Aktivitas fisik kurang', 
                'Alkohol', 
                'Obat-obatan', 
                'Kosmetik', 
                'Lain-lain'
            ]),
            'penjelasan' => $this->faker->optional()->paragraph,
        ];
    }
}
