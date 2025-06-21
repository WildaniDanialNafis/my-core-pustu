<?php

namespace App\Http\Controllers;

use App\Models\RiwayatKesehatanBumil;
use App\Models\EvaluasiKesehatanBumil;

class RiwayatKesehatanBumilController extends BaseCrudController
{
    protected $model = RiwayatKesehatanBumil::class;
    protected $tableName = 'riwayat_kesehatan_bumil';
    protected $foreignModel = EvaluasiKesehatanBumil::class;
    protected $foreignRelation = 'evaluasiKesehatanBumil';
    protected $foreignColumns = ['id_evaluasi_kesehatan_bumil', 'faskes'];
    protected $title = 'Riwayat Kesehatan Bumil';
}
