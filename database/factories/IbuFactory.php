<?php

namespace Database\Factories;

use App\Models\Ibu;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class IbuFactory extends Factory
{
    // Menentukan model yang diwakili oleh factory ini
    protected $model = Ibu::class;

    /**
     * Definisikan data default untuk factory ini.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Menghasilkan data palsu (fake data) menggunakan Faker
            'id_user' => User::factory(), // Menyambungkan dengan user yang sudah ada
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
            'puskesmas_domisili' => $this->faker->company,
            'no_reg_kohort_ibu' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
