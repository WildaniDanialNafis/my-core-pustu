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
    protected $title = 'Pemeriksaan Trimester 3';
}
