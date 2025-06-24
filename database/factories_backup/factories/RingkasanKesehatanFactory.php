<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\RingkasanKesehatan;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class RingkasanKesehatanFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = RingkasanKesehatan::class;

    public function definition(): array
    {
        return [
            'id_ibu' => $this->getForeignKeyId(Ibu::class),
            'tanggal_periksa' => $this->faker->date(),
            'nama' => $this->faker->name(),
            'paraf' => $this->faker->name(),
            'keluhan' => $this->faker->sentence(),
            'pemeriksaan' => $this->faker->paragraph(),
            'tindakan' => $this->faker->paragraph(),
            'tanggal_kembali' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
        ];
    }
}
