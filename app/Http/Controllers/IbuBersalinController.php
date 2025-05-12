<?php

namespace App\Http\Controllers;

use App\Models\IbuBersalin;
use App\Models\Ibu;

class IbuBersalinController extends BaseCrudController
{
    protected $model = IbuBersalin::class;
    protected $tableName = 'ibu_bersalin';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'tanggal_bersalin' => 'nullable|date',
        'umur_kehamilan' => 'nullable|integer',
        'penolong_persalinan' => 'nullable|in:SpOg,Dokter Umum,Bidan',
        'keterangan_penolong_persalinan' => 'nullable|string',
        'cara_persalinan' => 'nullable|in:Normal,Tindakan',
        'keterangan_cara_persalinan' => 'nullable|string',
        'keadaan_ibu' => 'nullable|in:Sehat,Pendarahan,Demam,Kejang,Lokhia Berbau,Lain-lain,Meniggal',
        'keterangan_keadaan_ibu' => 'nullable|string',
        'kb_pasca_persalinan' => 'nullable|string',
        'keterangan_tambahan' => 'nullable|string',
    ];
}
