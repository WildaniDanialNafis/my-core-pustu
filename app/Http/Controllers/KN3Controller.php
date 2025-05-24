<?php

namespace App\Http\Controllers;

use App\Models\KN3;
use App\Models\PelayananKesehatanNeonatus;

class KN3Controller extends BaseCrudController
{
    protected $model = KN3::class;
    protected $tableName = 'kn3';
    protected $foreignModel = PelayananKesehatanNeonatus::class;
    protected $foreignRelation = 'pelayananKesehatanNeonatus';
    protected $foreignColumns = ['id_pelayanan_kesehatan_neonatus', 'id_pelayanan_kesehatan_neonatus'];
    protected $validationRules = [
        'id_pelayanan_kesehatan_neonatus' => 'required|exists:pelayanan_kesehatan_neonatus,id_pelayanan_kesehatan_neonatus',
        'menyusu' => 'nullable|in:Ya,Tidak',
        'tali_pusat' => 'nullable|in:Ya,Tidak',
        'tanda_bahaya' => 'nullable|in:Ya,Tidak',
        'identifikasi_kuning' => 'nullable|in:Ya,Tidak',
        'keterangan_identifikasi_kuning' => 'nullable|string|max:255',
        'masalah' => 'nullable|string',
        'dirujuk_ke' => 'nullable|string',
        'nama_jelas_petugas' => 'nullable|string|max:255',
    ];
}
