<?php

namespace App\Http\Controllers;

use App\Models\KesehatanNifas;
use App\Models\Ibu;

class KesehatanNifasController extends BaseCrudController
{
    protected $model = KesehatanNifas::class;
    protected $tableName = 'kesehatan_nifas';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'integer|exists:ibu,id_ibu',
        'tanggal_periksa' => 'nullable|date',
        'tempat' => 'nullable|string',
        'periksa_payudara' => 'nullable|string',
        'periksa_pendarahan' => 'nullable|string',
        'periksa_jalan_lahir' => 'nullable|string',
        'vitamin_a' => 'nullable|string',
        'kb_pasca_persalinan' => 'nullable|string',
        'konseling' => 'nullable|string',
        'test_laksana_kasus' => 'nullable|string',
    ];
}
