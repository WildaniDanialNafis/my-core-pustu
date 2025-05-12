<?php

namespace App\Http\Controllers;

use App\Models\AmanatDarah;
use App\Models\MenyambutPersalinan;

class AmanatDarahController extends BaseCrudController
{
    protected $model = AmanatDarah::class;
    protected $tableName = 'amanat_darah';
    protected $foreignModel = MenyambutPersalinan::class;
    protected $foreignRelation = 'menyambutPersalinan';
    protected $foreignColumns = ['id_menyambut_persalinan', 'nama_pembuat'];
    protected $validationRules = [
        'id_menyambut_persalinan' => 'required|exists:menyambut_persalinan,id_menyambut_persalinan',
        'nama' => 'nullable|string|max:255',
        'hp' => 'nullable|string|max:255',
    ];
}
