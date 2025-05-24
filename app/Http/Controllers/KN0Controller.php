<?php

namespace App\Http\Controllers;

use App\Models\KN0;
use App\Models\PelayananKesehatanNeonatus;

class KN0Controller extends BaseCrudController
{
    protected $model = KN0::class;
    protected $tableName = 'kn0';
    protected $foreignModel = PelayananKesehatanNeonatus::class;
    protected $foreignRelation = 'pelayananKesehatanNeonatus';
    protected $foreignColumns = ['id_pelayanan_kesehatan_neonatus', 'id_pelayanan_kesehatan_neonatus']; 
    protected $validationRules = [
        'id_pelayanan_kesehatan_neonatus' => 'required|exists:pelayanan_kesehatan_neonatus,id_pelayanan_kesehatan_neonatus',
        'kondisi' => 'nullable|string|max:255',
        'bb' => 'nullable|numeric',
        'pb' => 'nullable|numeric',
        'lk' => 'nullable|numeric',
        'imd' => 'nullable|in:Ya,Tidak',
        'vit_k1' => 'nullable|in:Ya,Tidak',
        'salep' => 'nullable|in:Ya,Tidak',
        'tetes_mata' => 'nullable|in:Ya,Tidak',
        'imunisasi_hb' => 'nullable|in:Ya,Tidak',
        'tanggal' => 'nullable|date',
        'nomor_batch' => 'nullable|string|max:255',
        'masalah' => 'nullable|string',
        'dirujuk_ke' => 'nullable|string',
        'nama_jelas_petugas' => 'nullable|string|max:255',
    ];
}
