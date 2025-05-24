<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\RujukanAnak;

class RujukanAnakController extends BaseCrudController
{
    protected $model = RujukanAnak::class;
    protected $tableName = 'rujukan_anak';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'tanggal' => 'nullable|date',
        'dirujuk_ke' => 'nullable|string|max:255',
        'sebab_dirujuk' => 'nullable|string',
        'diagnosis_sementara' => 'nullable|string',
        'tindakan_sementara' => 'nullable|string',
        'nama_yang_merujuk' => 'nullable|string|max:255',
        'paraf_yang_merujuk' => 'nullable|string|max:255',
    ];
}
