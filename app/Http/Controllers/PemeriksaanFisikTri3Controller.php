<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanFisikTri3;
use App\Models\PemeriksaanTrimester3;

class PemeriksaanFisikTri3Controller extends BaseCrudController
{
    protected $model = PemeriksaanFisikTri3::class;
    protected $tableName = 'pemeriksaan_fisik_tri3';
    protected $foreignModel = PemeriksaanTrimester3::class;
    protected $foreignRelation = 'pemeriksaanTrimester3';
    protected $foreignColumns = ['id_pemeriksaan_trimester3', 'id_pemeriksaan_trimester3'];
    protected $title = 'Pemeriksaan Fisik Trimester 3';
}
