<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanTrimester3;
use App\Models\Ibu;

class PemeriksaanTrimester3Controller extends BaseCrudController
{
    protected $model = PemeriksaanTrimester3::class;
    protected $tableName = 'pemeriksaan_trimester3';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'rencana_konsultasi_lanjut' => 'nullable|in:Gizi,Kebidanan,Anak,Penyakit Dalam,Neurologi,THT,Psikiatri',
        'rencana_tempat_bersalin' => 'nullable|in:FKTP,FKRTL',
        'rencana_kontrasepsi' => 'nullable|in:MAL,Pil,Suntik,AKDR,Implan,Steril,Belum Memilih',
        'konseling' => 'nullable|in:Ya,Tidak',
        'jelaskan' => 'nullable|string',
        'kesimpulan' => 'nullable|string',
    ];
}
