<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\RingkasanMtbs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RingkasanMtbs>
 */
class RingkasanMtbsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = RingkasanMtbs::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'tanggal' => $this->faker->dateTime(),
            'puskesmas' => $this->faker->company(),
            'catatan' => $this->faker->paragraph(),
            'tanggal_kembali' => $this->faker->dateTime(),
        ];
    }
}
