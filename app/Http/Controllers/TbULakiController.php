<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\TbULaki;

class TbULakiController extends BaseCrudController
{
    protected $model = TbULaki::class;
    protected $tableName = 'tb_u_laki';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Tinggi Badan Per Umur Anak Laki-laki';
}
