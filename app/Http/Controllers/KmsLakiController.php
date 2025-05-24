<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\KmsLaki;

class KmsLakiController extends BaseCrudController
{
    protected $model = KmsLaki::class;
    protected $tableName = 'kms_laki';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'nama_anak' => 'nullable|string|max:255',
        'nama_posyandu' => 'nullable|string|max:255',
    ];
}
