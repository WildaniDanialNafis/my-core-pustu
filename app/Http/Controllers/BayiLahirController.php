<?php

namespace App\Http\Controllers;

use App\Models\BayiLahir;
use App\Models\Ibu;

class BayiLahirController extends BaseCrudController
{
    protected $model = BayiLahir::class;
    protected $tableName = 'bayi_lahir';
    protected $foreignModel = Ibu::class;
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $foreignRelation = 'ibu';
    protected $title = 'Bayi Lahir';
}
