<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\KmsLaki;

class KmsLakiController extends BaseCrudController
{
    protected string $model = KmsLaki::class;
    protected string $tableName = 'kms_laki';
    protected string $foreignModel = Anak::class;
    protected string $foreignRelation = 'anak';
    protected array $foreignColumns = ['id_anak', 'nama'];

    protected array $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'nama_anak' => 'nullable|string|max:255',
        'nama_posyandu' => 'nullable|string|max:255',
    ];
}
