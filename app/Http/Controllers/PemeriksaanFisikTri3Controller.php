<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanFisikTri3;
use App\Models\PemeriksaanTrimester3;

class PemeriksaanFisikTri3Controller extends BaseCrudController
{
    protected $model = PemeriksaanFisikTri3::class;
    protected $tableName = 'pemeriksaan_fisik_tri3';
    protected $foreignModel = PemeriksaanTrimester3::class;
    protected $foreignRelation = 'pemeriksaanTrimester3';
    protected $foreignColumns = ['id_pemeriksaan_trimester3', 'id_pemeriksaan_trimester3'];
    protected $validationRules = [
        'id_pemeriksaan_trimester3' => 'required|exists:pemeriksaan_trimester3,id_pemeriksaan_trimester3',
        'keadaan_umum' => 'nullable|in:Baik,Sedang,Buruk',
        'konjuctiva' => 'nullable|in:Normal,Tidak Normal',
        'sklera' => 'nullable|in:Normal,Tidak Normal',
        'gigi_mulut' => 'nullable|in:Normal,Tidak Normal',
        'tht' => 'nullable|in:Normal,Tidak Normal',
        'leher' => 'nullable|in:Normal,Tidak Normal',
        'jantung' => 'nullable|in:Normal,Tidak Normal',
        'paru' => 'nullable|in:Normal,Tidak Normal',
        'perut' => 'nullable|in:Normal,Tidak Normal',
        'tungkai' => 'nullable|in:Normal,Tidak Normal',
    ];
}
