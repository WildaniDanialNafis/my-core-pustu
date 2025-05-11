<?php

namespace Database\Factories;

use App\Models\Anak;
use App\Models\KeteranganLahir;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KeteranganLahir>
 */
class KeteranganLahirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = KeteranganLahir::class;

    public function definition(): array
    {
        return [
            'id_anak' => Anak::factory(),
            'no' => $this->faker->uuid(),
            'tanggal' => $this->faker->dateTime(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'jenis_kelahiran' => $this->faker->randomElement(['Tunggal', 'Kembar 2', 'Kembar 3', 'Lainnya']),
            'keterangan_jenis_kelahiran' => $this->faker->optional()->word(),
            'anak_ke' => $this->faker->numberBetween(1, 5),
            'usia_gestasi' => $this->faker->numberBetween(30, 42),
            'berat_lahir' => $this->faker->randomFloat(2, 2.0, 4.5),
            'panjang_badan' => $this->faker->randomFloat(1, 45.0, 55.0),
            'lingkar_kepala' => $this->faker->randomFloat(1, 30.0, 40.0),
            'di' => $this->faker->randomElement(['Rumah Sakit', 'Puskesmas', 'Rumah Bersalin', 'Praktik Mandiri Bidan', 'Lainnya']),
            'keterangan_di' => $this->faker->optional()->word(),
            'alamat_anak' => $this->faker->address(),
            'diberi_nama' => $this->faker->firstName(),
            'nama_ibu' => $this->faker->name('female'),
            'umur' => $this->faker->numberBetween(20, 45),
            'nik_ibu' => $this->faker->numerify('################'),
            'nama_ayah' => $this->faker->name('male'),
            'nik_ayah' => $this->faker->numerify('################'),
            'pekerjaan' => $this->faker->jobTitle(),
            'alamat_ortu' => $this->faker->address(),
            'kecamatan' => $this->faker->city(),
            'kabupaten' => $this->faker->city(),
            'tanggal_keterangan_lahir' => $this->faker->dateTime(),
            'paraf_saksi1' => $this->faker->word(),
            'nama_saksi1' => $this->faker->name(),
            'paraf_saksi2' => $this->faker->word(),
            'nama_saksi2' => $this->faker->name(),
            'paraf_penolong_persalinan' => $this->faker->word(),
            'nama_penolong_persalinan' => $this->faker->name(),
            'fasilitas_kesehatan' => $this->faker->company(),
            'ttd' => $this->faker->imageUrl(),
            'stempel' => $this->faker->imageUrl(),
        ];
    }
}
