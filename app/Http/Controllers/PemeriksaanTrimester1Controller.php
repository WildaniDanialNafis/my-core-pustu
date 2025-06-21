<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanTrimester1;
use App\Models\Ibu;

class PemeriksaanTrimester1Controller extends BaseCrudController
{
    protected $model = PemeriksaanTrimester1::class;
    protected $tableName = 'pemeriksaan_trimester1';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Pemeriksaan Trimester 1';
}
