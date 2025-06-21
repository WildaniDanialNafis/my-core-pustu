<?php

namespace App\Http\Controllers;

use App\Models\RiwayatKehamilan;
use App\Models\EvaluasiKesehatanBumil;

class RiwayatKehamilanController extends BaseCrudController
{
    protected $model = RiwayatKehamilan::class;
    protected $tableName = 'riwayat_kehamilan';
    protected $foreignModel = EvaluasiKesehatanBumil::class;
    protected $foreignRelation = 'evaluasiKesehatanBumil';
    protected $foreignColumns = ['id_evaluasi_kesehatan_bumil', 'faskes'];
    protected $title = 'Riwayat Kehamilan';
}
