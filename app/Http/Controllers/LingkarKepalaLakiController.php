<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\LingkarKepalaLaki;

class LingkarKepalaLakiController extends BaseCrudController
{
    protected $model = LingkarKepalaLaki::class;
    protected $tableName = 'lingkar_kepala_laki';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Lingkar Kepala Per Umur Anak Laki-laki';
}
