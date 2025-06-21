<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPerilakuBerisiko;
use App\Models\EvaluasiKesehatanBumil;

class RiwayatPerilakuBerisikoController extends BaseCrudController
{
    protected $model = RiwayatPerilakuBerisiko::class;
    protected $tableName = 'riwayat_perilaku_berisiko';
    protected $foreignModel = EvaluasiKesehatanBumil::class;
    protected $foreignRelation = 'evaluasiKesehatanBumil';
    protected $foreignColumns = ['id_evaluasi_kesehatan_bumil', 'faskes'];
    protected $title = 'Riwayat Perilaku Berisiko';
}
