<?php

namespace App\Http\Controllers;

use App\Models\UsgTri1;
use App\Models\PemeriksaanTrimester1;

class UsgTri1Controller extends BaseCrudController
{
    protected $model = UsgTri1::class;
    protected $tableName = 'usg_tri1';
    protected $foreignModel = PemeriksaanTrimester1::class;
    protected $foreignRelation = 'pemeriksaanTrimester1';
    protected $foreignColumns = ['id_pemeriksaan_trimester1', 'id_pemeriksaan_trimester1'];
    protected $title = 'USG Trimester 1';
}
