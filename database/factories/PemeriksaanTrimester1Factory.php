<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\PemeriksaanTrimester1;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemeriksaanTrimester1>
 */
class PemeriksaanTrimester1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PemeriksaanTrimester1::class; 
     
    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'kesimpulan' => $this->faker->sentence(),
            'rekomendasi' => $this->faker->sentence(),
        ];
    }
}
