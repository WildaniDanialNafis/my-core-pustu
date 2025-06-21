<?php

namespace App\Http\Controllers;

use App\Models\BayiBaruLahir;
use App\Models\Anak;

class BayiBaruLahirController extends BaseCrudController
{
    protected $model = BayiBaruLahir::class;
    protected $tableName = 'bayi_baru_lahir';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Bayi Baru Lahir';
}
