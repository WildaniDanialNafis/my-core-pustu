<?php

namespace App\Http\Controllers;

use App\Models\PenyimpanganEmosional;
use App\Models\PelayananSdidtk;

class PenyimpanganEmosionalController extends BaseCrudController
{
    protected $model = PenyimpanganEmosional::class;
    protected $tableName = 'penyimpangan_emosional';
    protected $foreignModel = PelayananSdidtk::class;
    protected $foreignRelation = 'pelayananSdidtk';
    protected $foreignColumns = ['id_pelayanan_sdidtk', 'id_pelayanan_sdidtk'];
    protected $validationRules = [
        'id_pelayanan_sdidtk' => 'required|exists:pelayanan_sdidtk,id_pelayanan_sdidtk',
        'kmpe' => 'nullable|in:N,R',
        'm_chat' => 'nullable|in:N,R',
        'gpph' => 'nullable|in:N,R',
    ];
}
