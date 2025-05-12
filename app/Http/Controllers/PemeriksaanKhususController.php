<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanKhusus;
use App\Models\EvaluasiKesehatanBumil;

class PemeriksaanKhususController extends BaseCrudController
{
    protected $model = PemeriksaanKhusus::class;
    protected $tableName = 'pemeriksaan_khusus';
    protected $foreignModel = EvaluasiKesehatanBumil::class;
    protected $foreignRelation = 'evaluasiKesehatanBumil';
    protected $foreignColumns = ['id_evaluasi_kesehatan_bumil', 'faskes'];
    protected $validationRules = [
        'id_evaluasi_kesehatan_bumil' => 'required|integer|exists:evaluasi_kesehatan_bumil,id_evaluasi_kesehatan_bumil',
        'inspekulo' => 'nullable|string|max:255',
        'vulva' => 'nullable|in:Normal,Tidak Normal',
        'uretra' => 'nullable|in:Normal,Tidak Normal',
        'vagina' => 'nullable|in:Normal,Tidak Normal',
        'fluksus' => 'nullable|in:+,--',
        'fluor' => 'nullable|in:+,--',
        'porsio' => 'nullable|in:Normal,Tidak Normal',
    ];
}
