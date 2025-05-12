<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanLaboratoriumTri1;
use App\Models\PemeriksaanTrimester1;

class PemeriksaanLaboratoriumTri1Controller extends BaseCrudController
{
    protected $model = PemeriksaanLaboratoriumTri1::class;
    protected $tableName = 'pemeriksaan_laboratorium_tri1';
    protected $foreignModel = PemeriksaanTrimester1::class;
    protected $foreignRelation = 'pemeriksaanTrimester1';
    protected $foreignColumns = ['id_pemeriksaan_trimester1', 'id_pemeriksaan_trimester1'];
    protected $validationRules = [
        'id_pemeriksaan_trimester1' => 'required|exists:pemeriksaan_trimester1,id_pemeriksaan_trimester1',
        'tanggal' => 'nullable|date',
        'hemoglobin' => 'nullable|numeric|min:0',
        'tindak_hemoglobin' => 'nullable|string',
        'goldar' => 'nullable|string|max:10',
        'rhesus' => 'nullable|string|max:10',
        'tindak_goldar_rhesus' => 'nullable|string',
        'gula_darah_sewaktu' => 'nullable|numeric|min:0',
        'tindak_gula_darah' => 'nullable|string',
        'ppia' => 'nullable|string|max:255',
        'tindak_ppia' => 'nullable|string',
        'h' => 'nullable|in:R,NR',
        'tindak_h' => 'nullable|string',
        's' => 'nullable|in:R,NR',
        'tindak_s' => 'nullable|string',
        'hepatitis_b' => 'nullable|in:R,NR',
        'tindak_hepatitis_b' => 'nullable|string',
        'lain_lain' => 'nullable|string',
        'tindak_lain_lain' => 'nullable|string',
    ];
}
