<?php

namespace App\Http\Controllers;

use App\Models\Bayi;
use App\Models\Anak;

class BayiController extends BaseCrudController
{
    protected $model = Bayi::class;
    protected $tableName = 'bayi';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Bayi';
}
