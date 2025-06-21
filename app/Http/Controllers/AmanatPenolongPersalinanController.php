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
    protected $title = 'Amanat Penolong Persalinan';
}
