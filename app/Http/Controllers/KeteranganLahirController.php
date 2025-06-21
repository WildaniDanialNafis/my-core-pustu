<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\KeteranganLahir;

class KeteranganLahirController extends BaseCrudController
{
    protected $model = KeteranganLahir::class;
    protected $tableName = 'keterangan_lahir';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Keterangan Lahir';
}
