<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\KmsLaki;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KmsLaki>
 */
class KmsLakiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    protected $model = KmsLaki::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'nama_anak' => $this->faker->name('male'),
            'nama_posyandu' => $this->faker->company(),
        ];
    }
}
