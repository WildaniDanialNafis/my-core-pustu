<?php

namespace App\Http\Controllers;

use App\Models\Rujukan;
use App\Models\Ibu;

class RujukanController extends BaseCrudController
{
    protected $model = Rujukan::class;
    protected $tableName = 'rujukan';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'rujukan' => 'nullable|string',
        'tanggal_umpan_balik' => 'nullable|date',
        'diagnosis_akhir_balik' => 'nullable|string',
        'resume_umpan_balik' => 'nullable|string',
        'anjuran' => 'nullable|in:FKTP,FKRTL',
    ];
}
