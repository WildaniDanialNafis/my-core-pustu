<?php

namespace Database\Factories\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

trait AutoForeignKeys
{
    public function withAutoForeignKeys(array $attributes = []): array
    {
        foreach ($attributes as $key => $value) {
            // Lewati kalau nilai sudah ditentukan
            continue;
        }

        // Cari semua kolom yang match pola id_xxx
        foreach ($this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable()) as $column) {
            if (!array_key_exists($column, $attributes) && Str::startsWith($column, 'id_')) {
                $relatedName = Str::after($column, 'id_');
                $relatedClass = $this->guessModelClass($relatedName);

                if (class_exists($relatedClass) && is_subclass_of($relatedClass, Model::class)) {
                    $key = (new $relatedClass)->getKeyName();

                    $attributes[$column] = $relatedClass::inRandomOrder()->value($key)
                        ?? $relatedClass::factory()->create()->$key;
                }
            }
        }

        return $attributes;
    }

    /**
     * Menebak nama model berdasarkan nama kolom foreign key.
     */
    protected function guessModelClass(string $related): string
    {
        return 'App\\Models\\' . Str::studly($related);
    }
}
