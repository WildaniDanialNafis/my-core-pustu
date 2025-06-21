<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\RingkasanPelayananDokter;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class RingkasanPelayananDokterFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = RingkasanPelayananDokter::class;

    public function definition(): array
    {
        return [
            'id_anak' => $this->getForeignKeyId(Anak::class),
            'tanggal' => $this->faker->dateTime(),
            'pemeriksa' => $this->faker->name(),
            'stamp' => $this->faker->word(),
            'paraf' => $this->faker->word(),
            'keluhan' => $this->faker->sentence(),
            'pemeriksaan' => $this->faker->paragraph(),
            'tindakan' => $this->faker->paragraph(),
            'tanggal_kembali' => $this->faker->dateTime(),
        ];
    }
}
