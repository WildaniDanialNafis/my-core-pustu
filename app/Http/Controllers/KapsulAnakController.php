<?php

namespace App\Http\Controllers;

use App\Models\KapsulAnak;
use App\Models\Anak;

class KapsulAnakController extends BaseCrudController
{
    protected $model = KapsulAnak::class;
    protected $tableName = 'kapsul_anak';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'id_umur_kapsul_anak' => 'required|exists:umur_kapsul_anak,id_umur_kapsul_anak',
        'kapsul' => 'nullable|in:Biru,Merah',
        'februari' => 'nullable|date',
        'agustus' => 'nullable|date',
        'obat_cacing' => 'nullable|date',
    ];
}
