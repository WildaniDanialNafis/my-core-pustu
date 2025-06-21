<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\KontrolTtd;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class KontrolTtdFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = KontrolTtd::class;

    public function definition(): array
    {
        return [
            'id_ibu' => $this->getForeignKeyId(Ibu::class),
            'nama_pengontrol' => $this->faker->name(),
            'hubungan' => $this->faker->randomElement(['Suami', 'Ibu', 'Mertua', 'Tetangga', 'Teman']),
        ];
    }
}
