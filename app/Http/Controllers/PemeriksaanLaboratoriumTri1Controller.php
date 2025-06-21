<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanLaboratoriumTri1;
use App\Models\PemeriksaanTrimester1;

class PemeriksaanLaboratoriumTri1Controller extends BaseCrudController
{
    protected $model = PemeriksaanLaboratoriumTri1::class;
    protected $tableName = 'pemeriksaan_laboratorium_tri1';
    protected $foreignModel = PemeriksaanTrimester1::class;
    protected $foreignRelation = 'pemeriksaanTrimester1';
    protected $foreignColumns = ['id_pemeriksaan_trimester1', 'id_pemeriksaan_trimester1'];
    protected $title = 'Pemeriksaan Laboratorium Trimester 1';
}
