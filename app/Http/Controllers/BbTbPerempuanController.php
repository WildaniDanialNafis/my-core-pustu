<?php

namespace App\Http\Controllers;

use App\Models\BbTbPerempuan;
use App\Models\Anak;

class BbTbPerempuanController extends BaseCrudController
{
    protected $model = BbTbPerempuan::class;
    protected $tableName = 'bb_tb_perempuan';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Berat Badan Per Tinggi Badan Anak Perempuan';
}
