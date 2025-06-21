<?php

namespace App\Http\Controllers;

use App\Models\RingkasanKesehatan;
use App\Models\Ibu;

class RingkasanKesehatanController extends BaseCrudController
{
    protected $model = RingkasanKesehatan::class;
    protected $tableName = 'ringkasan_kesehatan';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Ringkasan Kesehatan';
}
