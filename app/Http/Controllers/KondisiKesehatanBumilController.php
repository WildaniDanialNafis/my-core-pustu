<?php

namespace App\Http\Controllers;

use App\Models\KondisiKesehatanBumil;
use App\Models\EvaluasiKesehatanBumil;

class KondisiKesehatanBumilController extends BaseCrudController
{
    protected $model = KondisiKesehatanBumil::class;
    protected $tableName = 'kondisi_kesehatan_bumil';
    protected $foreignModel = EvaluasiKesehatanBumil::class;
    protected $foreignRelation = 'evaluasiKesehatanBumil';
    protected $foreignColumns = ['id_evaluasi_kesehatan_bumil', 'faskes'];
    protected $validationRules = [
        'id_evaluasi_kesehatan_bumil' => 'required|integer|exists:evaluasi_kesehatan_bumil,id_evaluasi_kesehatan_bumil',
        'tanggal_periksa' => 'nullable|date',
        'tb' => 'nullable|numeric',
        'bb' => 'nullable|numeric',
        'lila' => 'nullable|numeric',
        'imt' => 'nullable|numeric',
        'status' => 'nullable|in:Kurus,Normal,Gemuk,Obesitas',
    ];
}
