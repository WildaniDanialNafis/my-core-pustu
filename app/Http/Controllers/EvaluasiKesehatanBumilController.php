<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\Ibu;

class EvaluasiKesehatanBumilController extends BaseCrudController
{
    protected $model = EvaluasiKesehatanBumil::class;
    protected $tableName = 'evaluasi_kesehatan_bumil';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'nama_dokter' => 'nullable|string|max:255',
        'faskes' => 'nullable|string|max:255',
    ];
}
