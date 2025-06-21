<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\BbULaki;

class BbULakiController extends BaseCrudController
{
    protected $model = BbULaki::class;
    protected $tableName = 'bb_u_laki';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Berat Badan Per Umur Anak Laki-laki';
}
