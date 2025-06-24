<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\NasihatAnak;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class NasihatAnakFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = NasihatAnak::class;

    public function definition(): array
    {
        return [

            'id_anak' => $this->getForeignKeyId(Anak::class),
            'id_umur_nasihat_anak' => $this->faker->numberBetween(1, 7),
            'nasihat' => $this->faker->sentence(8),
            'tanggal' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'tanggal' => fake()->dateTimeBetween('-60 days', 'now'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
