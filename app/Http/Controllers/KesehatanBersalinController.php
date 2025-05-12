<?php

namespace App\Http\Controllers;

use App\Models\KesehatanBersalin;
use App\Models\Ibu;

class KesehatanBersalinController extends BaseCrudController
{
    protected $model = KesehatanBersalin::class;
    protected $tableName = 'kesehatan_bersalin';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'taksiran_persalinan' => 'nullable|string|max:255',
        'fasyankes' => 'nullable|string|max:255',
        'rujukan' => 'nullable|string|max:255',
        'inisiasi_menyusui_dini' => 'nullable|string',
    ];
}
