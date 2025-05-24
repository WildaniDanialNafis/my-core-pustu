<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\RingkasanMtbs;

class RingkasanMtbsController extends BaseCrudController
{
    protected $model = RingkasanMtbs::class;
    protected $tableName = 'ringkasan_mtbs';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'tanggal' => 'nullable|date',
        'puskesmas' => 'nullable|string|max:255',
        'catatan' => 'nullable|string',
        'tanggal_kembali' => 'nullable|date',
    ];
}
