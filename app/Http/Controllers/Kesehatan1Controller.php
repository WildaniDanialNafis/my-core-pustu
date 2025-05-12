<?php

namespace App\Http\Controllers;

use App\Models\Kesehatan1;
use App\Models\Ibu;

class Kesehatan1Controller extends BaseCrudController
{
    protected $model = Kesehatan1::class;
    protected $tableName = 'kesehatan1';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'hpht' => 'nullable|date',
        'bb' => 'nullable|integer',
        'tb' => 'nullable|integer',
        'imt' => 'nullable|integer',
    ];
}
