<?php

namespace App\Http\Controllers;

use App\Models\AmanatPenolongPersalinan;
use App\Models\MenyambutPersalinan;

class AmanatPenolongPersalinanController extends BaseCrudController
{
    protected $model = AmanatPenolongPersalinan::class;
    protected $tableName = 'amanat_penolong_persalinan';
    protected $foreignModel = MenyambutPersalinan::class;
    protected $foreignRelation = 'menyambutPersalinan';
    protected $foreignColumns = ['id_menyambut_persalinan', 'nama_pembuat'];
    protected $validationRules = [
        'id_menyambut_persalinan' => 'required|exists:menyambut_persalinan,id_menyambut_persalinan',
        'penolong_persalinan' => 'nullable|in:Dokter,Bidan',
        'nama' => 'nullable|string|max:255',
    ];
}
