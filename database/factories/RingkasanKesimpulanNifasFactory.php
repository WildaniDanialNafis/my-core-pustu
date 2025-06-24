<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\RingkasanKesimpulanNifas;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class RingkasanKesimpulanNifasFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = RingkasanKesimpulanNifas::class;

    public function definition(): array
    {
        return [

            'id_ibu' => $this->getForeignKeyId(Ibu::class),
            'keadaan_ibu' => $this->faker->randomElement(['Sehat', 'Sakit', 'Meninggal']),
            'keadaan_bayi' => $this->faker->randomElement(['Sehat', 'Sakit', 'Kelainan Bawaan', 'Meninggal']),
            'keterangan_keadaan_bayi' => $this->faker->sentence(),
            'komplikasi_nifas' => $this->faker->randomElement(['Pendarahan', 'Infeksi', 'Hipertensi', 'Lain-lain']),
            'keterangan_komplikasi_nifas' => $this->faker->sentence(),
            'kesimpulan' => $this->faker->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
