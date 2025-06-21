<?php

namespace App\Http\Controllers;

use App\Models\Rujukan;
use App\Models\Ibu;

class RujukanController extends BaseCrudController
{
    protected $model = Rujukan::class;
    protected $tableName = 'rujukan';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Rujukan';
}
