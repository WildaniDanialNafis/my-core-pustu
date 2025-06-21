<?php

namespace App\Http\Controllers;

use App\Models\MenyambutPersalinan;
use App\Models\Ibu;

class MenyambutPersalinanController extends BaseCrudController
{
    protected $model = MenyambutPersalinan::class;
    protected $tableName = 'menyambut_persalinan';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Menyambut Persalinan';
}
