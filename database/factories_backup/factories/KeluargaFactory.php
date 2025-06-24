<?php

namespace Database\Factories;

use App\Models\Ibu;
use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class KeluargaFactory extends Factory
{
    use HasForeignKey;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_ibu' => $this->getForeignKeyId(Ibu::class), // Menyambungkan dengan user yang sudah ada
            'nama' => $this->faker->name,
            'pembiayaan' => $this->faker->word,
            'no_jkn' => $this->faker->regexify('[0-9]{13}'),
            'faskes_tk_1' => $this->faker->company,
            'faskes_rujukan' => $this->faker->company,
            'gol_darah' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'tmpt_lahir' => $this->faker->city,
            'tgl_lahir' => $this->faker->date(),
            'pendidikan' => $this->faker->word,
            'pekerjaan' => $this->faker->jobTitle,
            'provinsi' => $this->faker->state,
            'kabupaten' => $this->faker->city,
            'alamat' => $this->faker->address,
            'telepon' => $this->faker->phoneNumber,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
