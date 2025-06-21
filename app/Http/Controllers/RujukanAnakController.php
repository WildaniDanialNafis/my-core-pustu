<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\RujukanAnak;

class RujukanAnakController extends BaseCrudController
{
    protected $model = RujukanAnak::class;
    protected $tableName = 'rujukan_anak';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Rujukan Anak';
}
