<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\Ibu;

class EvaluasiKesehatanBumilController extends BaseCrudController
{
    protected $model = EvaluasiKesehatanBumil::class;
    protected $tableName = 'evaluasi_kesehatan_bumil';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Evaluasi Kesehatan Bumil';
}
