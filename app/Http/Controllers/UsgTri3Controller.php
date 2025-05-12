<?php

namespace App\Http\Controllers;

use App\Models\UsgTri3;
use App\Models\PemeriksaanTrimester3;

class UsgTri3Controller extends BaseCrudController
{
    protected $model = UsgTri3::class;
    protected $tableName = 'usg_tri3';
    protected $foreignModel = PemeriksaanTrimester3::class;
    protected $foreignRelation = 'pemeriksaanTrimester3';
    protected $foreignColumns = ['id_pemeriksaan_trimester3', 'id_pemeriksaan_trimester3'];
    protected $validationRules = [
        'id_pemeriksaan_trimester3' => 'required|exists:pemeriksaan_trimester3,id_pemeriksaan_trimester3',
        'hpht' => 'nullable|date',
        'kehamilan' => 'nullable|integer|min:1',
        'janin' => 'nullable|in:Hidup,Tidak Hidup',
        'bpd' => 'nullable|numeric|min:0',
        'jumlah_janin' => 'nullable|in:Tunggal,Ganda',
        'hc' => 'nullable|numeric|min:0',
        'letak_janin' => 'nullable|in:Presentasi Kepala,Presentasi Sungsang,Presentasi Melintang',
        'berat_janin' => 'nullable|numeric|min:0',
        'fl' => 'nullable|numeric|min:0',
        'plasenta' => 'nullable|in:Normal,Tidak Normal',
        'cairan_ketuban' => 'nullable|numeric|min:0',
        'usia_kehamilan' => 'nullable|integer|min:0|max:50',
    ];
}
