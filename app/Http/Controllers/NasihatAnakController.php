<?php

namespace App\Http\Controllers;

use App\Models\NasihatAnak;
use App\Models\Anak;

class NasihatAnakController extends BaseCrudController
{
    protected $model = NasihatAnak::class;
    protected $tableName = 'nasihat_anak';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'id_umur_nasihat_anak' => 'required|integer|between:1,7',
        'nasihat' => 'nullable|string',
        'tanggal' => 'nullable|date',
    ];
}
