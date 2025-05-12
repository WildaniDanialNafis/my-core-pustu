<?php

namespace App\Http\Controllers;

use App\Models\UsgTri1;
use App\Models\PemeriksaanTrimester1;

class UsgTri1Controller extends BaseCrudController
{
    protected $model = UsgTri1::class;
    protected $tableName = 'usg_tri1';
    protected $foreignModel = PemeriksaanTrimester1::class;
    protected $foreignRelation = 'pemeriksaanTrimester1';
    protected $foreignColumns = ['id_pemeriksaan_trimester1', 'id_pemeriksaan_trimester1'   ];
    protected $validationRules = [
        'id_pemeriksaan_trimester1' => 'required|exists:pemeriksaan_trimester1,id_pemeriksaan_trimester1',
        'hpht' => 'nullable|date',
        'usia_kehamilan' => 'nullable|integer|min:0',
        'gestational_sac' => 'nullable|numeric|min:0',
        'crown_rump_length' => 'nullable|numeric|min:0',
        'denyut_jantung_janin' => 'nullable|integer|min:0',
        'sesuai_usia_kehamilan' => 'nullable|integer|in:0,1',
        'letak_janin' => 'nullable|in:intrauterin,ekstrauterin',
        'taksiran_persalinan' => 'nullable|string|max:255',
        'hasil_usg' => 'nullable|string|max:255',
    ];
}
