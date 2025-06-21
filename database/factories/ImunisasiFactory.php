<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\Imunisasi;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImunisasiFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Imunisasi::class;

    public function definition(): array
    {
        return [
            'id_anak' => $this->getForeignKeyId(Anak::class),
            'id_vaksin' => $this->faker->numberBetween(1, 17),
            'tanggal' => $this->faker->dateTimeThisYear(),
            'paraf' => $this->faker->name(),
        ];
    }
}
