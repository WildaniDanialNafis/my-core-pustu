<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanLaboratoriumTri3;
use App\Models\PemeriksaanTrimester3;

class PemeriksaanLaboratoriumTri3Controller extends BaseCrudController
{
    protected $model = PemeriksaanLaboratoriumTri3::class;
    protected $tableName = 'pemeriksaan_laboratorium_tri3';
    protected $foreignModel = PemeriksaanTrimester3::class;
    protected $foreignRelation = 'pemeriksaanTrimester3';
    protected $foreignColumns = ['id_pemeriksaan_trimester3', 'id_pemeriksaan_trimester3'];
    protected $title = 'Pemeriksaan Laboratorium Trimester 3';
}
