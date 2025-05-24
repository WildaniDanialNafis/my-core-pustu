<?php

namespace App\Http\Controllers;

use App\Models\KmsLaki;
use App\Models\DataKmsLaki;

class DataKmsLakiController extends BaseCrudController
{
    protected $model = DataKmsLaki::class;
    protected $tableName = 'data_kms_laki';
    protected $foreignModel = KmsLaki::class;
    protected $foreignRelation = 'kmsLaki';
    protected $foreignColumns = ['id_kms_laki', 'nama_anak'];

    protected $validationRules = [
        'id_kms_laki' => 'required|exists:kms_laki,id_kms_laki',
        'umur' => 'nullable|integer|min:0',
        'bulan_penimbangan' => 'nullable|date',
        'bb' => 'nullable|numeric|min:0',
        'kbm' => 'nullable|numeric|min:0',
        'n_t' => 'nullable|in:N,T',
        'asi_eksklusif' => 'nullable|string|max:255',
    ];
}
