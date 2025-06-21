<?php

namespace App\Http\Controllers;

use App\Models\RingkasanNifas;
use App\Models\Ibu;

class RingkasanNifasController extends BaseCrudController
{
    protected $model = RingkasanNifas::class;
    protected $tableName = 'ringkasan_nifas';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Ringkasan Nifas';
}
