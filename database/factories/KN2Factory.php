<?php

namespace Database\Factories;

use App\Models\KN2;
use App\Models\PelayananKesehatanNeonatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KN2>
 */
use Database\Factories\Traits\HasForeignKey;

class KN2Factory extends Factory
{
    use HasForeignKey;    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = KN2::class;

    public function definition(): array
    {
        return [
            'id_pelayanan_kesehatan_neonatus' => $this->getForeignKeyId(PelayananKesehatanNeonatus::class),
            'menyusu' => $this->faker->randomElement(['Ya', 'Tidak']),
            'tali_pusat' => $this->faker->randomElement(['Ya', 'Tidak']),
            'tanda_bahaya' => $this->faker->randomElement(['Ya', 'Tidak']),
            'identifikasi_kuning' => $this->faker->randomElement(['Ya', 'Tidak']),
            'imunisasi_hb' => $this->faker->randomElement(['Ya', 'Tidak']),
            'tanggal' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'nomor_batch' => $this->faker->bothify('BATCH-####'),
            'skrining_hipotiroid_kogenital' => $this->faker->randomElement(['Ya', 'Tidak']),
            'masalah' => $this->faker->sentence(),
            'dirujuk_ke' => $this->faker->company(),
            'nama_jelas_petugas' => $this->faker->name(),
        ];
    }
}
