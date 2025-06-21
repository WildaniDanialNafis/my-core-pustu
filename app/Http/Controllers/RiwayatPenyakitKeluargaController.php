<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPenyakitKeluarga;
use App\Models\EvaluasiKesehatanBumil;

class RiwayatPenyakitKeluargaController extends BaseCrudController
{
    protected $model = RiwayatPenyakitKeluarga::class;
    protected $tableName = 'riwayat_penyakit_keluarga';
    protected $foreignModel = EvaluasiKesehatanBumil::class;
    protected $foreignRelation = 'evaluasiKesehatanBumil';
    protected $foreignColumns = ['id_evaluasi_kesehatan_bumil', 'faskes'];
    protected $title = 'Riwayat Penyakit Keluarga';
}
