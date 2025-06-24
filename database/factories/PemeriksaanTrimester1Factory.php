<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\PemeriksaanTrimester1;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class PemeriksaanTrimester1Factory extends Factory
{
    use HasForeignKey;

    /**
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
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
