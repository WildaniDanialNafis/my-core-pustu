<?php

namespace App\Http\Controllers;

use App\Models\RingkasanNifas;
use App\Models\Ibu;

class RingkasanNifasController extends BaseCrudController
{
    protected $model = RingkasanNifas::class;
    protected $tableName = 'ringkasan_nifas';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'kf' => 'nullable|in:KF1,KF2,KF3,KF4',
        'tanggal' => 'nullable|date',
        'faskes' => 'nullable|string|max:255',
        'klasifikasi' => 'nullable|string',
        'tindakan' => 'nullable|string',
    ];
}
