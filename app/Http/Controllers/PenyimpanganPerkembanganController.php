<?php

namespace App\Http\Controllers;

use App\Models\PenyimpanganPerkembangan;
use App\Models\PelayananSdidtk;

class PenyimpanganPerkembanganController extends BaseCrudController
{
    protected $model = PenyimpanganPerkembangan::class;
    protected $tableName = 'penyimpangan_perkembangan';
    protected $foreignModel = PelayananSdidtk::class;
    protected $foreignRelation = 'pelayananSdidtk';
    protected $foreignColumns = ['id_pelayanan_sdidtk', 'id_pelayanan_sdidtk'];
    protected $validationRules = [
        'id_pelayanan_sdidtk' => 'required|exists:pelayanan_sdidtk,id_pelayanan_sdidtk',
        'kpsp' => 'nullable|in:Ds,Dm,Dp',
        'tdd' => 'nullable|in:N,R',
        'tdl' => 'nullable|in:N,R',
    ];
}
