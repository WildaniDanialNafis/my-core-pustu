<?php

namespace Database\Factories;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\Ibu;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluasiKesehatanBumilFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = EvaluasiKesehatanBumil::class;

    public function definition(): array
    {
        return [
            'id_ibu' => $this->getForeignKeyId(Ibu::class),
            'nama_dokter' => $this->faker->name(),
            'faskes' => $this->faker->company(),
        ];
    }
}
