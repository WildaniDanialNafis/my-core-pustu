<?php

namespace App\Http\Controllers;

use App\Models\BbTbPerempuan;
use App\Models\Anak;

class BbTbPerempuanController extends BaseCrudController
{
    protected $model = BbTbPerempuan::class;
    protected $tableName = 'bb_tb_perempuan';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'bb' => 'nullable|numeric|min:0',
        'tb' => 'nullable|numeric|min:0',
    ];
}
