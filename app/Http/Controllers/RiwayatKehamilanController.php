<?php

namespace App\Http\Controllers;

use App\Models\RiwayatKehamilan;
use App\Models\EvaluasiKesehatanBumil;

class RiwayatKehamilanController extends BaseCrudController
{
    protected $model = RiwayatKehamilan::class;
    protected $tableName = 'riwayat_kehamilan';
    protected $foreignModel = EvaluasiKesehatanBumil::class;
    protected $foreignRelation = 'evaluasiKesehatanBumil';
    protected $foreignColumns = ['id_evaluasi_kesehatan_bumil', 'faskes'];
    protected $validationRules = [
        'id_evaluasi_kesehatan_bumil' => 'required|integer|exists:evaluasi_kesehatan_bumil,id_evaluasi_kesehatan_bumil',
        'tahun' => 'nullable|date',
        'berat_lahir' => 'nullable|numeric',
        'persalinan' => 'nullable|string|max:255',
        'penolong_persalinan' => 'nullable|string|max:255',
        'komplikasi' => 'nullable|string|max:255',
    ];
}
