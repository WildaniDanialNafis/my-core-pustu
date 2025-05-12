<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\RingkasanMtbs;

class RingkasanMtbsController extends BaseCrudController
{
    protected string $model = RingkasanMtbs::class;
    protected string $tableName = 'ringkasan_mtbs';
    protected string $foreignModel = Anak::class;
    protected string $foreignRelation = 'anak';
    protected array $foreignColumns = ['id_anak', 'nama'];

    protected array $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'tanggal' => 'nullable|date',
        'puskesmas' => 'nullable|string|max:255',
        'catatan' => 'nullable|string',
        'tanggal_kembali' => 'nullable|date',
    ];
}
