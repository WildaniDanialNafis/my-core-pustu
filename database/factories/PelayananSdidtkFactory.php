<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\PelayananSdidtk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PelayananSdidtk>
 */
class PelayananSdidtkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PelayananSdidtk::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'id_umur_sdidtk' => $this->faker->numberBetween(1, 15),
            'tindakan' => $this->faker->sentence(),
            'kunjungan_ulang' => $this->faker->sentence(),
        ];
    }
}
