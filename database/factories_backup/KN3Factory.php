<?php

namespace Database\Factories;

use App\Models\KN3;
use App\Models\PelayananKesehatanNeonatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KN3>
 */
use Database\Factories\Traits\HasForeignKey;

class KN3Factory extends Factory
{
    use HasForeignKey;    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = KN3::class;

    public function definition(): array
    {
        return [
            'id_pelayanan_kesehatan_neonatus' => $this->getForeignKeyId(PelayananKesehatanNeonatus::class),
            'menyusu' => $this->faker->randomElement(['Ya', 'Tidak']),
            'tali_pusat' => $this->faker->randomElement(['Ya', 'Tidak']),
            'tanda_bahaya' => $this->faker->randomElement(['Ya', 'Tidak']),
            'identifikasi_kuning' => $this->faker->randomElement(['Ya', 'Tidak']),
            'keterangan_identifikasi_kuning' => $this->faker->optional()->sentence(),
            'masalah' => $this->faker->optional()->paragraph(),
            'dirujuk_ke' => $this->faker->optional()->company(),
            'nama_jelas_petugas' => $this->faker->name(),
        ];
    }
}
