<?php

namespace App\Http\Controllers;

use App\Models\SkriningPreeklampsia;
use App\Models\Ibu;

class SkriningPreeklampsiaController extends BaseCrudController
{
    protected $model = SkriningPreeklampsia::class;
    protected $tableName = 'skrining_preeklampsia';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'kesimpulan' => 'nullable|string',
        'paraf_dokter' => 'nullable|string|max:255',
        'nama_dokter' => 'nullable|string|max:255',
    ];
}
