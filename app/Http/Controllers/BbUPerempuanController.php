<?php

namespace App\Http\Controllers;

use App\Models\BbUPerempuan;
use App\Models\Anak;

class BbUPerempuanController extends BaseCrudController
{
    protected $model = BbUPerempuan::class;
    protected $tableName = 'bb_u_perempuan';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'bb' => 'nullable|numeric|min:0',
        'bulan' => 'nullable|integer|min:0|max:11',
        'tahun' => 'nullable|integer|min:0',
    ];
}
