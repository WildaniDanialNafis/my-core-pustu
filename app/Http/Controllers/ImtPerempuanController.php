<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\ImtPerempuan;

class ImtPerempuanController extends BaseCrudController
{
    protected $model = ImtPerempuan::class;
    protected $tableName = 'imt_perempuan';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'IMT Anak Perempuan';
}
