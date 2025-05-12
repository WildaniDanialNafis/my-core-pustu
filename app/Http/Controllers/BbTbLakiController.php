<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\BbTbLaki;

class BbTbLakiController extends BaseCrudController
{
    protected string $model = BbTbLaki::class;
    protected string $tableName = 'bb_tb_laki';
    protected string $foreignModel = Anak::class;
    protected string $foreignRelation = 'anak';
    protected array $foreignColumns = ['id_anak', 'nama'];

    protected array $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'bb' => 'nullable|numeric|min:0',
        'tb' => 'nullable|numeric|min:0',
    ];
}
