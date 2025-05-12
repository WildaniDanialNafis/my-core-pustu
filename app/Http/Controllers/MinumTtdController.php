<?php

namespace App\Http\Controllers;

use App\Models\MinumTtd;
use App\Models\KontrolTtd;

class MinumTtdController extends BaseCrudController
{
    protected $model = MinumTtd::class;
    protected $tableName = 'minum_ttd';
    protected $foreignModel = KontrolTtd::class;
    protected $foreignRelation = 'kontrolTtd';
    protected $foreignColumns = ['id_kontrol_ttd', 'nama_pengontrol'];
    protected $validationRules = [
        'id_kontrol_ttd' => 'integer|exists:kontrol_ttd,id_kontrol_ttd',
        'bulan_ke' => 'string',
        'keterangan' => 'string|nullable',
        'nama_bulan' => 'string|nullable',
    ];
}
