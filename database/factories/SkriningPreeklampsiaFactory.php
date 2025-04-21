<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\SkriningPreeklampsia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SkriningPreeklampsia>
 */
class SkriningPreeklampsiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = SkriningPreeklampsia::class;

    public function definition(): array
    {
        return [
            'id_ibu' => Ibu::factory(),
            'kesimpulan' => $this->faker->sentence(10),
            'paraf_dokter' => $this->faker->lexify('paraf-????'),
            'nama_dokter' => $this->faker->name,
        ];
    }
}
