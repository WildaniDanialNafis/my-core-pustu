<?php

namespace App\Http\Controllers;

use App\Models\KesehatanBersalin;
use App\Models\Ibu;

class KesehatanBersalinController extends BaseCrudController
{
    protected $model = KesehatanBersalin::class;
    protected $tableName = 'kesehatan_bersalin';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Kesehatan Bersalin';
}
