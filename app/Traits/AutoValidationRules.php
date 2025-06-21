<?php

namespace App\Traits;

use Illuminate\Support\Facades\Schema;

trait AutoValidationRules
{
    protected function initValidationRules()
    {
        if (!$this->model || !$this->tableName) return;

        $columns = Schema::getColumnListing($this->tableName);
        $primaryKey = (new $this->model)->getKeyName();
        $defined = $this->validationRules ?? [];

        foreach ($columns as $column) {
            if (in_array($column, [$primaryKey, 'created_at', 'updated_at'])) continue;

            if (isset($defined[$column])) continue;

            if ($this->foreignRelation && $this->foreignModel) {
                $modelInstance = new $this->model;
                $foreignKey = $modelInstance->{$this->foreignRelation}()->getForeignKeyName();

                if ($column === $foreignKey) {
                    $foreignTable = (new $this->foreignModel)->getTable();
                    $defined[$column] = "required|exists:$foreignTable,$column";
                    continue;
                }
            }

            // Tambahkan pada bagian fallback
            if (preg_match('/^tgl_|^tanggal_/', $column)) {
                $defined[$column] = 'required|date';
            } elseif (preg_match('/^is_|_status$/', $column)) {
                $defined[$column] = 'required|boolean';
            } elseif (preg_match('/_id$/', $column)) {
                $defined[$column] = 'required|integer';
            } elseif (preg_match('/(nama|alamat|keterangan|catatan)/', $column)) {
                $defined[$column] = 'required|string|max:255';
            } else {
                $defined[$column] = 'required';
            };
        }

        $this->validationRules = $defined;
    }
}
