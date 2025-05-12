<?php

namespace App\Http\Controllers;

use App\Models\RingkasanKesimpulanNifas;
use App\Models\Ibu;

class RingkasanKesimpulanNifasController extends BaseCrudController
{
    protected $model = RingkasanKesimpulanNifas::class;
    protected $tableName = 'ringkasan_kesimpulan_nifas';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'keadaan_ibu' => 'nullable|in:Sehat,Sakit,Meninggal',
        'keadaan_bayi' => 'nullable|in:Sehat,Sakit,Kelainan Bawaan,Meninggal',
        'keterangan_keadaan_bayi' => 'nullable|string',
        'komplikasi_nifas' => 'nullable|in:Pendarahan,Infeksi,Hipertensi,Lain-lain',
        'keterangan_komplikasi_nifas' => 'nullable|string',
        'kesimpulan' => 'nullable|string',
    ];
}
