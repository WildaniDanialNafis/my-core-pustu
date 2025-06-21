<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UmurKapsulAnak>
 */
use Database\Factories\Traits\HasForeignKey;

class UmurKapsulAnakFactory extends Factory
{
    use HasForeignKey;    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
