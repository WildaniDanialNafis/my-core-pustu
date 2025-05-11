<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\MenyambutPersalinan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenyambutPersalinan>
 */
class MenyambutPersalinanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = MenyambutPersalinan::class;

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'nama_pembuat' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'perkiraan_bulan_lahir' => $this->faker->monthName(),
            'perkiraan_tahun_lahir' => (string) $this->faker->year(),
            'dana_persalinan' => $this->faker->randomElement(['Disiapkan Sendiri', 'Ditanggung JKN', 'JAMPERSAL']),
            'dibantu_oleh' => $this->faker->name(),
            'metode_kontrasepsi' => $this->faker->randomElement(['IUD', 'Implan', 'Suntik', 'Pil', 'Kondom']),
            'golongan_darah' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'rhesus' => $this->faker->randomElement(['+', '-']),
            'bersedia_dirujuk' => $this->faker->randomElement(['risiko', 'komplikasi', 'kegawatdaruratan']),
            'tanggal' => $this->faker->dateTime(),
            'persetujuan' => $this->faker->randomElement(['Suami', 'Orang Tua', 'Keluarga']),
            'paraf_persetujuan' => $this->faker->word(),
            'nama_persetujuan' => $this->faker->name(),
            'paraf_bumil' => $this->faker->word(),
            'nama_bumil' => $this->faker->name(),
            'nakes' => $this->faker->randomElement(['Bidan', 'Dokter']),
            'paraf_nakes' => $this->faker->word(),
            'nama_nakes' => $this->faker->name(),
        ];
    }
}
