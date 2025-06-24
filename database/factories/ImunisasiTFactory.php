<?php

namespace Database\Factories;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\ImunisasiT;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImunisasiTFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ImunisasiT::class;

    public function definition(): array
    {
        return [

            'id_evaluasi_kesehatan_bumil' => $this->getForeignKeyId(EvaluasiKesehatanBumil::class),
            'tt_ke' => $this->faker->randomElement(['1', '2', '3', '4', '5']),
            'status' => $this->faker->randomElement(['Belum', 'Sudah']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
