<?php

namespace App\Http\Controllers;

use App\Models\KontrolTtd;
use App\Models\Ibu;

class KontrolTtdController extends BaseCrudController
{
    protected $model = KontrolTtd::class;
    protected $tableName = 'kontrol_ttd';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Kontrol TTD';
}
