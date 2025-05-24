<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\BbTbLaki;

class BbTbLakiController extends BaseCrudController
{
    protected $model = BbTbLaki::class;
    protected $tableName = 'bb_tb_laki';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'bb' => 'nullable|numeric|min:0',
        'tb' => 'nullable|numeric|min:0',
    ];
}
