<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\ImtPerempuan;

class ImtPerempuanController extends BaseCrudController
{
    protected $model = ImtPerempuan::class;
    protected $tableName = 'imt_perempuan';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'imt' => 'nullable|numeric|min:0',
        'bulan' => 'nullable|integer|min:0|max:11',
        'tahun' => 'nullable|integer|min:0',
    ];
}
