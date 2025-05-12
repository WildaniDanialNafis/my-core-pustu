<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanFisikTri1;
use App\Models\PemeriksaanTrimester1;

class PemeriksaanFisikTri1Controller extends BaseCrudController
{
    protected $model = PemeriksaanFisikTri1::class;
    protected $tableName = 'pemeriksaan_fisik_tri1';
    protected $foreignModel = PemeriksaanTrimester1::class;
    protected $foreignRelation = 'pemeriksaanTrimester1';
    protected $foreignColumns = ['id_pemeriksaan_trimester1', 'id_pemeriksaan_trimester1'];
    protected $validationRules = [
        'id_pemeriksaan_trimester1' => 'required|exists:pemeriksaan_trimester1,id_pemeriksaan_trimester1',
        'keadaan_umum' => 'nullable|string|max:255',
        'konjuctiva' => 'nullable|in:Normal,Tidak Normal',
        'sklera' => 'nullable|in:Normal,Tidak Normal',
        'kulit' => 'nullable|in:Normal,Tidak Normal',
        'leher' => 'nullable|in:Normal,Tidak Normal',
        'gigi_mulut' => 'nullable|in:Normal,Tidak Normal',
        'tht' => 'nullable|in:Normal,Tidak Normal',
        'jantung' => 'nullable|in:Normal,Tidak Normal',
        'paru' => 'nullable|in:Normal,Tidak Normal',
        'perut' => 'nullable|in:Normal,Tidak Normal',
        'tungkai' => 'nullable|in:Normal,Tidak Normal',
    ];
}
