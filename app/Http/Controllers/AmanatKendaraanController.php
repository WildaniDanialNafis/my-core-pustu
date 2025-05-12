<?php

namespace App\Http\Controllers;

use App\Models\AmanatKendaraan;
use App\Models\MenyambutPersalinan;

class AmanatKendaraanController extends BaseCrudController
{
    protected $model = AmanatKendaraan::class;
    protected $tableName = 'amanat_kendaraan';
    protected $foreignModel = MenyambutPersalinan::class;
    protected $foreignRelation = 'menyambutPersalinan';
    protected $foreignColumns = ['id_menyambut_persalinan', 'nama_pembuat'];
    protected $validationRules = [
        'id_menyambut_persalinan' => 'required|integer',
        'kendaraan' => 'nullable|string',
        'nama' => 'nullable|string',
        'hp' => 'nullable|string',
    ];
}
