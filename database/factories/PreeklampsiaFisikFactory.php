<?php

namespace Database\Factories;

use App\Models\PreeklampsiaFisik;
use App\Models\SkriningPreeklampsia;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class PreeklampsiaFisikFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PreeklampsiaFisik::class;

    public function definition(): array
    {
        return [

            'id_skrining_preeklampsia' => $this->getForeignKeyId(SkriningPreeklampsia::class),
            'id_kriteria_pemeriksaan_fisik' => $this->faker->numberBetween(1, 2),
            'risiko' => $this->faker->randomElement(['', 'Risiko sedang', 'Risiko tinggi']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
