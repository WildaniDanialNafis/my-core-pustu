<?php

namespace App\Http\Controllers;

use App\Models\PelayananSdidtk;
use App\Models\Anak;

class PelayananSdidtkController extends BaseCrudController
{
    protected $model = PelayananSdidtk::class;
    protected $tableName = 'pelayanan_sdidtk';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'id_umur_sdidtk' => 'required|integer|between:1,15',
        'tindakan' => 'nullable|string',
        'kunjungan_ulang' => 'nullable|string',
    ];
}
