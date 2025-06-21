<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\KesehatanBersalin;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class KesehatanBersalinFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = KesehatanBersalin::class;

    public function definition(): array
    {
        return [
            'id_ibu' => $this->getForeignKeyId(Ibu::class),
            'taksiran_persalinan' => $this->faker->word(),
            'fasyankes' => $this->faker->company(),
            'rujukan' => $this->faker->word(),
            'inisiasi_menyusui_dini' => $this->faker->paragraph(),
        ];
    }
}
