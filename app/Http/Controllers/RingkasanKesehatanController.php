<?php

namespace App\Http\Controllers;

use App\Models\RingkasanKesehatan;
use App\Models\Ibu;

class RingkasanKesehatanController extends BaseCrudController
{
    protected $model = RingkasanKesehatan::class;
    protected $tableName = 'ringkasan_kesehatan';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'tanggal_periksa' => 'nullable|date',
        'nama' => 'nullable|string|max:255',
        'paraf' => 'nullable|string|max:255',
        'keluhan' => 'nullable|string',
        'pemeriksaan' => 'nullable|string',
        'tindakan' => 'nullable|string',
        'tanggal_kembali' => 'nullable|date',
    ];
}
