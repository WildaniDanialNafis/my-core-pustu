<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanFisikTri1;
use App\Models\PemeriksaanTrimester1;

class PemeriksaanFisikTri1Controller extends BaseCrudController
{
    protected $model = PemeriksaanFisikTri1::class;
    protected $tableName = 'pemeriksaan_fisik_tri1';
    protected $foreignModel = PemeriksaanTrimester1::class;
    protected $foreignRelation = 'pemeriksaanTrimester1';
    protected $foreignColumns = ['id_pemeriksaan_trimester1', 'id_pemeriksaan_trimester1'];
    protected $title = 'Pemeriksaan Fisik Trimester 1';
}
