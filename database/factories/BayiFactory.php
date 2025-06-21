<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\Bayi;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class BayiFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Bayi::class;

    public function definition(): array
    {
        return [
            'id_anak' => $this->getForeignKeyId(Anak::class),
            'tanggal' => $this->faker->dateTime(),
            'tempat' => $this->faker->city(),
            'bb' => $this->faker->randomFloat(2, 2.0, 6.0),
            'pb' => $this->faker->randomFloat(1, 45.0, 60.0),
            'lk' => $this->faker->randomFloat(1, 30.0, 40.0),
            'perkembangan' => $this->faker->sentence(),
            'kie' => $this->faker->word(),
            'imunisasi' => $this->faker->word(),
            'vit_a' => $this->faker->word(),
            'ppia1' => $this->faker->word(),
            'ppia2' => $this->faker->word(),
            'ppia3' => $this->faker->word(),
        ];
    }
}
