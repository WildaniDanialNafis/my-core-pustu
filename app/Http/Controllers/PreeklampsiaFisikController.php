<?php

namespace App\Http\Controllers;

use App\Models\PreeklampsiaFisik;
use App\Models\SkriningPreeklampsia;

class PreeklampsiaFisikController extends BaseCrudController
{
    protected $model = PreeklampsiaFisik::class;
    protected $tableName = 'preeklampsia_fisik';
    protected $foreignModel = SkriningPreeklampsia::class;
    protected $foreignRelation = 'skriningPreeklampsia';
    protected $foreignColumns = ['id_skrining_preeklampsia', 'nama_dokter'];
    protected $validationRules = [
        'id_skrining_preeklampsia' => 'required|exists:skrining_preeklampsia,id_skrining_preeklampsia',
        'id_kriteria_pemeriksaan_fisik' => 'required|integer|in:1,2',
        'risiko' => 'nullable|in:,Risiko sedang,Risiko tinggi',
    ];
}
