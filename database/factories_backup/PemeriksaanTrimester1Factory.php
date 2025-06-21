<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\PemeriksaanTrimester1;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemeriksaanTrimester1>
 */
use Database\Factories\Traits\HasForeignKey;

class PemeriksaanTrimester1Factory extends Factory
{
    use HasForeignKey;    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PemeriksaanTrimester1::class; 
     
    public function definition(): array
    {
        return [
            'id_ibu' => $this->getForeignKeyId(Ibu::class),
            'kesimpulan' => $this->faker->sentence(),
            'rekomendasi' => $this->faker->sentence(),
        ];
    }
}
