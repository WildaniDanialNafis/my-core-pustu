<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\SkriningPreeklampsia;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkriningPreeklampsiaFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = SkriningPreeklampsia::class;

    public function definition(): array
    {
        return [
            'id_ibu' => $this->getForeignKeyId(Ibu::class),
            'kesimpulan' => $this->faker->sentence(10),
            'paraf_dokter' => $this->faker->lexify('paraf-????'),
            'nama_dokter' => $this->faker->name,
        ];
    }
}
