<?php

namespace Database\Factories;

use Database\Factories\Traits\HasForeignKey;
use Illuminate\Database\Eloquent\Factories\Factory;

class UmurNasihatAnakFactory extends Factory
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

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
