<?php

namespace App\Http\Controllers;

use App\Models\AnakBalita;
use App\Models\Anak;

class AnakBalitaController extends BaseCrudController
{
    protected $model = AnakBalita::class;
    protected $tableName = 'anak_balita';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'tipe' => 'nullable|in:0-1,1-2,2-3,3-4,4-5',
        'tanggal' => 'nullable|date',
        'tempat' => 'nullable|string|max:255',
        'bb' => 'nullable|numeric|min:0',
        'pb' => 'nullable|numeric|min:0',
        'lk' => 'nullable|numeric|min:0',
        'perkembangan' => 'nullable|string|max:255',
        'kie' => 'nullable|string|max:255',
        'imunisasi' => 'nullable|string|max:255',
        'vit_a' => 'nullable|string|max:255',
        'obat_cacing' => 'nullable|string|max:255',
        'ppia1' => 'nullable|string|max:255',
        'ppia2' => 'nullable|string|max:255',
        'ppia3' => 'nullable|string|max:255',
    ];
}
