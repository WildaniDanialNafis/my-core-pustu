<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\RingkasanPelayananDokter;

class RingkasanPelayananDokterController extends BaseCrudController
{
    protected string $model = RingkasanPelayananDokter::class;
    protected string $tableName = 'ringkasan_pelayanan_dokter';
    protected string $foreignModel = Anak::class;
    protected string $foreignRelation = 'anak';
    protected array $foreignColumns = ['id_anak', 'nama'];

    protected array $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'tanggal' => 'nullable|date',
        'pemeriksa' => 'nullable|string|max:255',
        'stamp' => 'nullable|string|max:255',
        'paraf' => 'nullable|string|max:255',
        'keluhan' => 'nullable|string',
        'pemeriksaan' => 'nullable|string',
        'tindakan' => 'nullable|string',
        'tanggal_kembali' => 'nullable|date',
    ];
}
