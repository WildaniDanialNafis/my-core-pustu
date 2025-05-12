<?php

namespace App\Http\Controllers;

use App\Models\KontrolTtd;
use App\Models\Ibu;

class KontrolTtdController extends BaseCrudController
{
    protected $model = KontrolTtd::class;
    protected $tableName = 'kontrol_ttd';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'nama_pengontrol' => 'nullable|string|max:255',
        'hubungan' => 'nullable|string|max:255',
    ];
}
