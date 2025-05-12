<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\PelayananKesehatanNeonatus;

class PelayananKesehatanNeonatusController extends BaseCrudController
{
    protected string $model = PelayananKesehatanNeonatus::class;
    protected string $tableName = 'pelayanan_kesehatan_neonatus';
    protected string $foreignModel = Anak::class;
    protected string $foreignRelation = 'anak';
    protected array $foreignColumns = ['id_anak', 'nama'];

    protected array $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'catatan_penting' => 'nullable|string',
        'nama_nakes' => 'nullable|string|max:255',
    ];
}
