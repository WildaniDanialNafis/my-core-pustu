<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiKehamilan;
use App\Models\Ibu;

class EvaluasiKehamilanController extends BaseCrudController
{
    protected $model = EvaluasiKehamilan::class;
    protected $tableName = 'evaluasi_kehamilan';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Evaluasi Kehamilan';
}
