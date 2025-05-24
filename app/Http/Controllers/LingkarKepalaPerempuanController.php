<?php

namespace App\Http\Controllers;

use App\Models\LingkarKepalaPerempuan;
use App\Models\Anak;

class LingkarKepalaPerempuanController extends BaseCrudController
{
    protected $model = LingkarKepalaPerempuan::class;
    protected $tableName = 'lingkar_kepala_perempuan';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'lingkar_kepala' => 'nullable|numeric|min:0',
        'bulan' => 'nullable|integer|min:0|max:11',
        'tahun' => 'nullable|integer|min:0',
    ];
}
