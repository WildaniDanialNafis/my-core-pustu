<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\TbULaki;

class TbULakiController extends BaseCrudController
{
    protected $model = TbULaki::class;
    protected $tableName = 'tb_u_laki';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'tb' => 'nullable|numeric|min:0',
        'bulan' => 'nullable|integer|min:0|max:11',
        'tahun' => 'nullable|integer|min:0',
    ];
}
