<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\PelayananKesehatanNeonatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PelayananKesehatanNeonatus>
 */
class PelayananKesehatanNeonatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PelayananKesehatanNeonatus::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'catatan_penting' => $this->faker->paragraph(),
            'nama_nakes' => $this->faker->name(),
        ];
    }
}
