<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use App\Models\Anak;

class ImunisasiController extends BaseCrudController
{
    protected $model = Imunisasi::class;
    protected $tableName = 'imunisasi';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $validationRules = [
        'id_vaksin' => 'required|integer|between:1,17',
        'id_anak' => 'required|exists:anak,id_anak',
        'tanggal' => 'nullable|date',
        'paraf' => 'nullable|string',
    ];
}
