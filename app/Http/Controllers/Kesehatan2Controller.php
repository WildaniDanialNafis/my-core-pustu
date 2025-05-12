<?php

namespace App\Http\Controllers;

use App\Models\Kesehatan2;
use App\Models\Kesehatan1;

class Kesehatan2Controller extends BaseCrudController
{
    protected $model = Kesehatan2::class;
    protected $tableName = 'kesehatan2';
    protected $foreignModel = Kesehatan1::class;
    protected $foreignRelation = 'kesehatan1';
    protected $foreignColumns = ['id_kesehatan1', 'id_kesehatan1']; // atau ganti kolom kedua sesuai yang ingin ditampilkan

    protected $validationRules = [
        'id_kesehatan1' => 'required|exists:kesehatan1,id_kesehatan1',
        'trimester' => 'nullable|in:1,2,3',
        'tanggal_periksa' => 'nullable|date',
        'tempat' => 'nullable|string|max:50',
        'timbang' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
        'ukur_lingkar_lengan_atas' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
        'tekanan_darah_sistolik' => 'nullable|integer|min:0',
        'tekanan_darah_diastolik' => 'nullable|integer|min:0',
        'periksa_tinggi_rahim' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
        'periksa_letak_dan_denyut_jantung_janin' => 'nullable|string',
        'konseling' => 'nullable|string',
        'skrining_dokter' => 'nullable|string',
        'tablet_tambah_darah' => 'nullable|string|max:50',
        'test_lab_hemoglobin' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
        'test_golongan_darah' => 'nullable|string|max:3',
        'test_lab_protein_urine' => 'nullable|string|max:10',
        'test_lab_gula_darah' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
        'ppia1' => 'nullable|string|max:50',
        'ppia2' => 'nullable|string|max:50',
        'ppia3' => 'nullable|string|max:50',
        'test_laksana_kasus' => 'nullable|string',
    ];
}
