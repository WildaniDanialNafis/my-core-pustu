<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiKehamilan;
use App\Models\Ibu;

class EvaluasiKehamilanController extends BaseCrudController
{
    protected $model = EvaluasiKehamilan::class;
    protected $tableName = 'evaluasi_kehamilan';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'pemeriksa' => 'nullable|string|max:255',
        'tanggal' => 'nullable|date',
        'usia_gestasi' => 'nullable|integer|min:1|max:42',
        'denyut_jantung_janin' => 'nullable|integer|min:80|max:200',
        'sistolik' => 'nullable|integer|min:70|max:200',
        'diastolik' => 'nullable|integer|min:40|max:130',
        'gerakan_bayi' => 'nullable|integer|min:0|max:50',
        'urin_protein' => 'nullable|integer|min:0|max:10',
        'urin_reduksi' => 'nullable|integer|min:0|max:10',
        'hemoglobin' => 'nullable|integer|min:5|max:20',
        'kalsium' => 'nullable|integer|min:0|max:1',
        'aspirin' => 'nullable|integer|min:0|max:1',
    ];
}
