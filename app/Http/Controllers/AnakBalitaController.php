<?php

namespace App\Http\Controllers;

use App\Models\AnakBalita;
use App\Models\Anak;

class AnakBalitaController extends BaseCrudController
{
    protected $model = AnakBalita::class;
    protected $tableName = 'anak_balita';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Anak Balita';
}
