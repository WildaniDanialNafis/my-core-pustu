<?php

namespace App\Http\Controllers;

use App\Models\Bayi;
use App\Models\Anak;

class BayiController extends BaseCrudController
{
    protected $model = Bayi::class;
    protected $tableName = 'bayi';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'tanggal' => 'nullable|date',
        'tempat' => 'nullable|string|max:255',
        'bb' => 'nullable|numeric|min:0',
        'pb' => 'nullable|numeric|min:0',
        'lk' => 'nullable|numeric|min:0',
        'perkembangan' => 'nullable|string|max:255',
        'kie' => 'nullable|string|max:255',
        'imunisasi' => 'nullable|string|max:255',
        'vit_a' => 'nullable|string|max:255',
        'ppia1' => 'nullable|string|max:255',
        'ppia2' => 'nullable|string|max:255',
        'ppia3' => 'nullable|string|max:255',
    ];
}
