<?php

namespace App\Http\Controllers;

use App\Models\PemantauanKia;
use App\Models\Anak;

class PemantauanKiaController extends BaseCrudController
{
    protected $model = PemantauanKia::class;
    protected $tableName = 'pemantauan_kia';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Pemantauan KIA';
}
