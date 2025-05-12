<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\LingkarKepalaLaki;

class LingkarKepalaLakiController extends BaseCrudController
{
    protected string $model = LingkarKepalaLaki::class;
    protected string $tableName = 'lingkar_kepala_laki';
    protected string $foreignModel = Anak::class;
    protected string $foreignRelation = 'anak';
    protected array $foreignColumns = ['id_anak', 'nama'];

    protected array $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'lingkar_kepala' => 'nullable|numeric|min:0',
        'bulan' => 'nullable|integer|min:0|max:11',
        'tahun' => 'nullable|integer|min:0',
    ];
}
