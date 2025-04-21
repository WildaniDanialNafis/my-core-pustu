<?php

namespace Database\Factories;

use App\Models\KontrolTtd;
use App\Models\MinumTtd;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MinumTtd>
 */
class MinumTtdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = MinumTtd::class;

    public function definition(): array
    {
        return [
            'id_kontrol_ttd' => KontrolTtd::factory(),
            'bulan_ke' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9']),
            'keterangan' => $this->faker->sentence(),
            'nama_bulan' => $this->faker->randomElement([
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ]),
        ];
    }
}
