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
    protected $validationRules = [
        'id_evaluasi_kesehatan_bumil' => 'required|integer|exists:evaluasi_kesehatan_bumil,id_evaluasi_kesehatan_bumil',
        'perilaku' => 'nullable|in:Merokok,Pola makan berisiko,Aktivitas fisik kurang,Alkohol,Obat-obatan,Kosmetik,Lain-lain',
        'penjelasan' => 'nullable|string',
    ];
}
