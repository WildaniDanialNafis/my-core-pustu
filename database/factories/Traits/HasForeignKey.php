<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Model;

trait HasForeignKey
{
    /**
     * Ambil primary key dari model secara acak, atau buat jika belum ada.
     *
     * @param class-string<Model> $modelClass
     * @return int|string
     */
    public function getForeignKeyId(string $modelClass): int|string
    {
        $key = (new $modelClass)->getKeyName();

        return $modelClass::inRandomOrder()->value($key)
            ?? $modelClass::factory()->create()->{$key};
    }
}