<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\IbuBersalin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IbuBersalin>
 */
class IbuBersalinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = IbuBersalin::class;

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'tanggal_bersalin' => $this->faker->dateTime(),
            'umur_kehamilan' => $this->faker->numberBetween(28, 42),
            'penolong_persalinan' => $this->faker->randomElement(['SpOg', 'Dokter Umum', 'Bidan']),
            'keterangan_penolong_persalinan' => $this->faker->sentence(),
            'cara_persalinan' => $this->faker->randomElement(['Normal', 'Tindakan']),
            'keterangan_cara_persalinan' => $this->faker->sentence(),
            'keadaan_ibu' => $this->faker->randomElement(['Sehat','Pendarahan', 'Demam', 'Kejang', 'Lokhia Berbau', 'Lain-lain', 'Meniggal']),
            'keterangan_keadaan_ibu' => $this->faker->sentence(),
            'kb_pasca_persalinan' => $this->faker->sentence(),
            'keterangan_tambahan' => $this->faker->paragraph(),
        ];
    }
}
