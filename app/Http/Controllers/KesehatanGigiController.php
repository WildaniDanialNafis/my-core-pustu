<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\KesehatanGigi;

class KesehatanGigiController extends BaseCrudController
{
    protected $model = KesehatanGigi::class;
    protected $tableName = 'kesehatan_gigi';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'nama' => 'nullable|string|max:255',
        'umur' => 'nullable|string|max:255',
    ];
}
