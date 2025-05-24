<?php

namespace App\Http\Controllers;

use App\Models\PenyimpanganPertumbuhan;
use App\Models\PelayananSdidtk;

class PenyimpanganPertumbuhanController extends BaseCrudController
{
    protected $model = PenyimpanganPertumbuhan::class;
    protected $tableName = 'penyimpangan_pertumbuhan';
    protected $foreignModel = PelayananSdidtk::class;
    protected $foreignRelation = 'pelayananSdidtk';
    protected $foreignColumns = ['id_pelayanan_sdidtk', 'id_pelayanan_sdidtk'];
    protected $validationRules = [
        'id_pelayanan_sdidtk' => 'required|exists:pelayanan_sdidtk,id_pelayanan_sdidtk',
        'bb_u' => 'nullable|in:SK,K,N,RBBL',
        'bb_tb' => 'nullable|in:Gb,Gk,Gn,Gl,O',
        'tb_u' => 'nullable|in:SP,P,Tn,Ti',
        'lk_u' => 'nullable|in:Mi,N,Ma',
    ];
}
