<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanTrimester1;
use App\Models\Ibu;

class PemeriksaanTrimester1Controller extends BaseCrudController
{
    protected $model = PemeriksaanTrimester1::class;
    protected $tableName = 'pemeriksaan_trimester1';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'kesimpulan' => 'nullable|string',
        'rekomendasi' => 'nullable|string',
    ];
}
