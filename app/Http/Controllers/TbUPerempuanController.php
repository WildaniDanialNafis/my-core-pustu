<?php

namespace App\Http\Controllers;

use App\Models\TbUPerempuan;
use App\Models\Anak;

class TbUPerempuanController extends BaseCrudController
{
    protected $model = TbUPerempuan::class;
    protected $tableName = 'tb_u_perempuan';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Tinggi Badan Per Umur Anak Perempuan';
}
