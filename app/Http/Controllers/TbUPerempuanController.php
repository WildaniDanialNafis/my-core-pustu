<?php

namespace App\Http\Controllers;

use App\Models\TbUPerempuan;
use App\Models\Anak;

class TbUPerempuanController extends BaseCrudController
{
    protected $model = TbUPerempuan::class;
    protected $tableName = 'tb_u_perempuan';
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
