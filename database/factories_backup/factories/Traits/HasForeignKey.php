<?php

namespace Database\Factories\Traits;

trait HasForeignKey
{
    public function getForeignKeyId(string $modelClass): int|string
    {
        $key = (new $modelClass)->getKeyName();

        return $modelClass::inRandomOrder()->value($key)
            ?? $modelClass::factory()->create()->{$key};
    }
}
