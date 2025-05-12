<?php

namespace App\Http\Controllers;

use App\Models\BeratBadanBumil;
use App\Models\Ibu;

class BeratBadanBumilController extends BaseCrudController
{
    protected $model = BeratBadanBumil::class;
    protected $tableName = 'berat_badan_bumil';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'minggu' => 'nullable|integer|min:1|max:42',
        'berat_badan' => 'nullable|numeric|min:30|max:150',
    ];
}
