<?php

namespace App\Http\Controllers;

use App\Models\RiwayatKesehatanBumil;
use App\Models\EvaluasiKesehatanBumil;

class RiwayatKesehatanBumilController extends BaseCrudController
{
    protected $model = RiwayatKesehatanBumil::class;
    protected $tableName = 'riwayat_kesehatan_bumil';
    protected $foreignModel = EvaluasiKesehatanBumil::class;
    protected $foreignRelation = 'evaluasiKesehatanBumil';
    protected $foreignColumns = ['id_evaluasi_kesehatan_bumil', 'faskes'];
    protected $validationRules = [
        'id_evaluasi_kesehatan_bumil' => 'required|integer|exists:evaluasi_kesehatan_bumil,id_evaluasi_kesehatan_bumil',
        'riwayat_penyakit' => 'nullable|string|max:255',
    ];
}
