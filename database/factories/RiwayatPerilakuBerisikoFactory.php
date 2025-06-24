<?php

namespace Database\Factories;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\RiwayatPerilakuBerisiko;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class RiwayatPerilakuBerisikoFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = RiwayatPerilakuBerisiko::class;

    public function definition(): array
    {
        return [

            'id_evaluasi_kesehatan_bumil' => $this->getForeignKeyId(EvaluasiKesehatanBumil::class),
            'perilaku' => $this->faker->randomElement([
                'Merokok',
                'Pola makan berisiko',
                'Aktivitas fisik kurang',
                'Alkohol',
                'Obat-obatan',
                'Kosmetik',
                'Lain-lain',
            ]),
            'penjelasan' => $this->faker->optional()->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
