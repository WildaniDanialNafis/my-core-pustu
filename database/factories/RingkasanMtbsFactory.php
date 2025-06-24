<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\RingkasanMtbs;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class RingkasanMtbsFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = RingkasanMtbs::class;

    public function definition(): array
    {
        return [

            'id_anak' => $this->getForeignKeyId(Anak::class),
            'tanggal' => $this->faker->dateTime(),
            'puskesmas' => $this->faker->company(),
            'catatan' => $this->faker->paragraph(),
            'tanggal_kembali' => $this->faker->dateTime(),
            'tanggal' => fake()->dateTimeBetween('-60 days', 'now'),
            'tanggal_kembali' => fake()->dateTimeBetween('-60 days', 'now'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
