<?php

namespace Database\Factories;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\RiwayatKesehatanBumil;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class RiwayatKesehatanBumilFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = RiwayatKesehatanBumil::class;

    public function definition(): array
    {
        return [

            'id_evaluasi_kesehatan_bumil' => $this->getForeignKeyId(EvaluasiKesehatanBumil::class),
            'riwayat_penyakit' => $this->faker->sentence(3),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
