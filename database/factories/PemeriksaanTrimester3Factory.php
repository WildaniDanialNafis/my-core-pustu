<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\PemeriksaanTrimester3;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemeriksaanTrimester3>
 */
class PemeriksaanTrimester3Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PemeriksaanTrimester3::class; 

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'rencana_konsultasi_lanjut' => $this->faker->optional()->randomElement(['Gizi', 'Kebidanan', 'Anak', 'Penyakit Dalam', 'Neurologi', 'THT', 'Psikiatri']),
            'rencana_tempat_bersalin' => $this->faker->optional()->randomElement(['FKTP', 'FKRTL']),
            'rencana_kontrasepsi' => $this->faker->optional()->randomElement(['MAL', 'Pil', 'Suntik', 'AKDR', 'Implan', 'Steril', 'Belum Memilih']),
            'konseling' => $this->faker->optional()->randomElement(['Ya', 'Tidak']),
            'jelaskan' => $this->faker->optional()->sentence(),
            'kesimpulan' => $this->faker->optional()->paragraph(),
        ];
    }
}
