<?php

namespace App\Http\Controllers;

use App\Models\NasihatAnak;
use App\Models\Anak;

class NasihatAnakController extends BaseCrudController
{
    protected $model = NasihatAnak::class;
    protected $tableName = 'nasihat_anak';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Nasihat Anak';
}
