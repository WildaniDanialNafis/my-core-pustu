<?php

namespace App\Http\Controllers;

use App\Models\PreeklampsiaAnamnesis;
use App\Models\SkriningPreeklampsia;

class PreeklampsiaAnamnesisController extends BaseCrudController
{
    protected $model = PreeklampsiaAnamnesis::class;
    protected $tableName = 'preeklampsia_anamnesis';
    protected $foreignModel = SkriningPreeklampsia::class;
    protected $foreignRelation = 'skriningPreeklampsia';
    protected $foreignColumns = ['id_skrining_preeklampsia', 'nama_dokter'];
    protected $validationRules = [
        'id_skrining_preeklampsia' => 'required|exists:skrining_preeklampsia,id_skrining_preeklampsia',
        'id_kriteria_anamnesis' => 'required|integer|between:1,14',
        'risiko' => 'nullable|in:,Risiko sedang,Risiko tinggi',
    ];
}
