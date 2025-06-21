<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use App\Models\Anak;

class ImunisasiController extends BaseCrudController
{
    protected $model = Imunisasi::class;
    protected $tableName = 'imunisasi';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Imunisasi';
}
