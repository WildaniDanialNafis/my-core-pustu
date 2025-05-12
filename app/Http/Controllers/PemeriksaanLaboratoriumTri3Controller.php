<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanLaboratoriumTri3;
use App\Models\PemeriksaanTrimester3;

class PemeriksaanLaboratoriumTri3Controller extends BaseCrudController
{
    protected $model = PemeriksaanLaboratoriumTri3::class;
    protected $tableName = 'pemeriksaan_laboratorium_tri3';
    protected $foreignModel = PemeriksaanTrimester3::class;
    protected $foreignRelation = 'pemeriksaanTrimester3';
    protected $foreignColumns = ['id_pemeriksaan_trimester3', 'id_pemeriksaan_trimester3'];
    protected $validationRules = [
        'id_pemeriksaan_trimester3' => 'required|exists:pemeriksaan_trimester3,id_pemeriksaan_trimester3',
        'tanggal' => 'nullable|date',
        'hemoglobin' => 'nullable|numeric|min:0',
        'tindak_hemoglobin' => 'nullable|string',
        'gula_darah_puasa' => 'nullable|numeric|min:0',
        'tindak_gula_puasa' => 'nullable|string',
        'gula_darah_2_jam_post_pradinal' => 'nullable|numeric|min:0',
        'tindak_gula_darah_2_jam_post_pradinal' => 'nullable|string',
    ];
}
