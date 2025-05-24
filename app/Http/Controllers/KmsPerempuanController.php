<?php

namespace App\Http\Controllers;

use App\Models\KmsPerempuan;
use App\Models\Anak;

class KmsPerempuanController extends BaseCrudController
{
    protected $model = KmsPerempuan::class;
    protected $tableName = 'kms_perempuan';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'nama_anak' => 'nullable|string|max:255',
        'nama_posyandu' => 'nullable|string|max:255',
    ];
}
