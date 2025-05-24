<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\LingkarKepalaLaki;

class LingkarKepalaLakiController extends BaseCrudController
{
    protected $model = LingkarKepalaLaki::class;
    protected $tableName = 'lingkar_kepala_laki';
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
