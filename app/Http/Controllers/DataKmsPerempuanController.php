<?php

namespace App\Http\Controllers;

use App\Models\DataKmsPerempuan;
use App\Models\KmsPerempuan;

class DataKmsPerempuanController extends BaseCrudController
{
    protected $model = DataKmsPerempuan::class;
    protected $tableName = 'data_kms_perempuan';
    protected $foreignModel = KmsPerempuan::class;
    protected $foreignRelation = 'kmsPerempuan';
    protected $foreignColumns = ['id_kms_perempuan', 'nama_anak'];
    protected $validationRules = [
        'id_kms_perempuan' => 'required|exists:kms_perempuan,id_kms_perempuan',
        'umur' => 'nullable|integer|min:0',
        'bulan_penimbangan' => 'nullable|date',
        'bb' => 'nullable|numeric|min:0',
        'kbm' => 'nullable|numeric|min:0',
        'n_t' => 'nullable|in:N,T',
        'asi_eksklusif' => 'nullable|string|max:255',
    ];
}
