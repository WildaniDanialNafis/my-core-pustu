<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\KesehatanGigi;

class KesehatanGigiController extends BaseCrudController
{
    protected string $model = KesehatanGigi::class;
    protected string $tableName = 'kesehatan_gigi';
    protected string $foreignModel = Anak::class;
    protected string $foreignRelation = 'anak';
    protected array $foreignColumns = ['id_anak', 'nama'];

    protected array $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'nama' => 'nullable|string|max:255',
        'umur' => 'nullable|string|max:255',
    ];
}
