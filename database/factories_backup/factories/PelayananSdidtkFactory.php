<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\PelayananSdidtk;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class PelayananSdidtkFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PelayananSdidtk::class;

    public function definition(): array
    {
        return [
            'id_anak' => $this->getForeignKeyId(Anak::class),
            'id_umur_sdidtk' => $this->faker->numberBetween(1, 15),
            'tindakan' => $this->faker->sentence(),
            'kunjungan_ulang' => $this->faker->sentence(),
        ];
    }
}
