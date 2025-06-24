<?php

namespace Database\Factories;

use App\Models\PemeriksaanTrimester3;
use App\Models\UsgTri3;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsgTri3Factory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = UsgTri3::class;

    public function definition(): array
    {
        return [

            'id_pemeriksaan_trimester3' => $this->getForeignKeyId(PemeriksaanTrimester3::class),
            'hpht' => $this->faker->dateTimeBetween('-9 months', 'now'),
            'kehamilan' => $this->faker->numberBetween(1, 9),
            'janin' => $this->faker->randomElement(['Hidup', 'Tidak Hidup']),
            'bpd' => $this->faker->randomFloat(2, 2.0, 10.0),
            'jumlah_janin' => $this->faker->randomElement(['Tunggal', 'Ganda']),
            'hc' => $this->faker->randomFloat(2, 2.0, 35.0),
            'letak_janin' => $this->faker->randomElement(['Presentasi Kepala', 'Presentasi Sungsang', 'Presentasi Melintang']),
            'berat_janin' => $this->faker->randomFloat(2, 500, 4000),
            'fl' => $this->faker->randomFloat(2, 2.0, 8.0),
            'plasenta' => $this->faker->randomElement(['Normal', 'Tidak Normal']),
            'cairan_ketuban' => $this->faker->randomFloat(2, 5.0, 25.0),
            'usia_kehamilan' => $this->faker->numberBetween(20, 42),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
