<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\ImtLaki;

class ImtLakiController extends BaseCrudController
{
    protected $model = ImtLaki::class;
    protected $tableName = 'imt_laki';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'IMT Anak Laki-laki';
}
