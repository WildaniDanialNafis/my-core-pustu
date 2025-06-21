<?php

namespace App\Http\Controllers;

use App\Models\KapsulAnak;
use App\Models\Anak;

class KapsulAnakController extends BaseCrudController
{
    protected $model = KapsulAnak::class;
    protected $tableName = 'kapsul_anak';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Kapsul Anak';
}
