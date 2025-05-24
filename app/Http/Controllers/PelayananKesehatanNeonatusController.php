<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\PelayananKesehatanNeonatus;

class PelayananKesehatanNeonatusController extends BaseCrudController
{
    protected $model = PelayananKesehatanNeonatus::class;
    protected $tableName = 'pelayanan_kesehatan_neonatus';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'catatan_penting' => 'nullable|string',
        'nama_nakes' => 'nullable|string|max:255',
    ];
}
