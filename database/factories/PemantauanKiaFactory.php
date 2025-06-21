<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\PemantauanKia;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class PemantauanKiaFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PemantauanKia::class;

    public function definition(): array
    {
        return [
            'id_anak' => $this->getForeignKeyId(Anak::class),
            'id_ceklis' => $this->faker->numberBetween(1, 10),
            'hasil_pemantauan' => $this->faker->randomElement(['Lengkap', 'Tidak Lengkap']),
        ];
    }
}
