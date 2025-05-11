<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\Wali;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnakFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Anak::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_wali' => Wali::factory(),
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
            'provinsi' => $this->faker->state(),
            'kabupaten' => $this->faker->city(),
            'alamat' => $this->faker->address(),
            'telepon' => $this->faker->phoneNumber(),
        ];
    }
}
