<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\RingkasanKesimpulanNifas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RingkasanKesimpulanNifas>
 */
class RingkasanKesimpulanNifasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = RingkasanKesimpulanNifas::class;

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'keadaan_ibu' => $this->faker->randomElement(['Sehat', 'Sakit', 'Meninggal']),
            'keadaan_bayi' => $this->faker->randomElement(['Sehat', 'Sakit', 'Kelainan Bawaan', 'Meninggal']),
            'keterangan_keadaan_bayi' => $this->faker->sentence(),
            'komplikasi_nifas' => $this->faker->randomElement(['Pendarahan', 'Infeksi', 'Hipertensi', 'Lain-lain']),
            'keterangan_komplikasi_nifas' => $this->faker->sentence(),
            'kesimpulan' => $this->faker->paragraph(),
        ];
    }
}
