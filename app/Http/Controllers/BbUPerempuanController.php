<?php

namespace App\Http\Controllers;

use App\Models\BbUPerempuan;
use App\Models\Anak;

class BbUPerempuanController extends BaseCrudController
{
    protected $model = BbUPerempuan::class;
    protected $tableName = 'bb_u_perempuan';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Berat Badan Per Umur Anak Perempuan';
}
