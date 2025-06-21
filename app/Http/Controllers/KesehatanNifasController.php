<?php

namespace App\Http\Controllers;

use App\Models\KesehatanNifas;
use App\Models\Ibu;

class KesehatanNifasController extends BaseCrudController
{
    protected $model = KesehatanNifas::class;
    protected $tableName = 'kesehatan_nifas';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Kesehatan Nifas';
}
