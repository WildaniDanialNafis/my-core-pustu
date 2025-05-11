<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\PemantauanKia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemantauanKia>
 */
class PemantauanKiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PemantauanKia::class; 

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'id_ceklis' => $this->faker->numberBetween(1, 10),
            'hasil_pemantauan' => $this->faker->randomElement(['Lengkap', 'Tidak Lengkap']),
        ];
    }
}
