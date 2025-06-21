<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Wali;

class AnakController extends BaseCrudController
{
    protected $model = Anak::class;
    protected $tableName = 'anak';
    protected $foreignModel = Wali::class;
    protected $foreignRelation = 'wali';
    protected $foreignColumns = ['id_wali', 'nama'];
    protected $title = 'Anak';
}
