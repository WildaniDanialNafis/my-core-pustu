<?php

namespace App\Http\Controllers;

use App\Models\LingkarKepalaPerempuan;
use App\Models\Anak;

class LingkarKepalaPerempuanController extends BaseCrudController
{
    protected $model = LingkarKepalaPerempuan::class;
    protected $tableName = 'lingkar_kepala_perempuan';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Lingkar Kepala Per Umur Anak Perempuan';
}
