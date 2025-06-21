<?php

namespace App\Http\Controllers;

use App\Models\UsgTri3;
use App\Models\PemeriksaanTrimester3;

class UsgTri3Controller extends BaseCrudController
{
    protected $model = UsgTri3::class;
    protected $tableName = 'usg_tri3';
    protected $foreignModel = PemeriksaanTrimester3::class;
    protected $foreignRelation = 'pemeriksaanTrimester3';
    protected $foreignColumns = ['id_pemeriksaan_trimester3', 'id_pemeriksaan_trimester3'];
    protected $title = 'USG Trimester 3';
}
