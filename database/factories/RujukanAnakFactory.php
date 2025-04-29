<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\RujukanAnak;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RujukanAnak>
 */
class RujukanAnakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = RujukanAnak::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'tanggal' => $this->faker->dateTime(),
            'dirujuk_ke' => $this->faker->company(),
            'sebab_dirujuk' => $this->faker->sentence(),
            'diagnosis_sementara' => $this->faker->sentence(),
            'tindakan_sementara' => $this->faker->sentence(),
            'nama_yang_merujuk' => $this->faker->name(),
            'paraf_yang_merujuk' => $this->faker->word(),
        ];
    }
}
