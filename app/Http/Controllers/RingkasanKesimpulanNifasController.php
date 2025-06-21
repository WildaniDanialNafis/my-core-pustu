<?php

namespace App\Http\Controllers;

use App\Models\RingkasanKesimpulanNifas;
use App\Models\Ibu;

class RingkasanKesimpulanNifasController extends BaseCrudController
{
    protected $model = RingkasanKesimpulanNifas::class;
    protected $tableName = 'ringkasan_kesimpulan_nifas';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Ringkasan Kesimpulan Nifas';
}
