<?php

namespace Database\Factories;

use App\Models\Wali;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WaliFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Wali::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_user' => User::factory(),
            'nama' => $this->faker->name(),
            'nik' => $this->faker->numerify('##########'),
            'tmpt_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->date(),
            'gol_darah' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'jenis_pelayanan' => $this->faker->randomElement(['JKN', 'Asuransi Lain']),
            'no_asuransi' => $this->faker->numerify('##########'),
            'tgl_berlaku_asuransi' => $this->faker->date(),
            'fasilitas_pelayanan_kesehatan' => $this->faker->randomElement(['primer', 'sekunder']),
            'no_reg_kohort_bayi' => $this->faker->uuid(),
            'no_reg_kohort_balita' => $this->faker->uuid(),
            'no_catatan_medik_rs' => $this->faker->uuid(),
            'pendidikan' => $this->faker->word(),
            'pekerjaan' => $this->faker->jobTitle(),
            'provinsi' => $this->faker->state(),
            'kabupaten' => $this->faker->city(),
            'alamat' => $this->faker->address(),
            'telepon' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
