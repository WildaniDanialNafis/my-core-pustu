<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\PelayananKesehatanNeonatus;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class PelayananKesehatanNeonatusFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PelayananKesehatanNeonatus::class;

    public function definition(): array
    {
        return [

            'id_anak' => $this->getForeignKeyId(Anak::class),
            'catatan_penting' => $this->faker->paragraph(),
            'nama_nakes' => $this->faker->name(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
