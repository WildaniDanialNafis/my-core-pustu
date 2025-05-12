<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\BbULaki;

class BbULakiController extends BaseCrudController
{
    protected string $model = BbULaki::class;
    protected string $tableName = 'bb_u_laki';
    protected string $foreignModel = Anak::class;
    protected string $foreignRelation = 'anak';
    protected array $foreignColumns = ['id_anak', 'nama'];

    protected array $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'bb' => 'nullable|numeric|min:0',
        'bulan' => 'nullable|integer|min:0|max:11',
        'tahun' => 'nullable|integer|min:0',
    ];
}
