<?php

namespace App\Http\Controllers;

use App\Models\IbuBersalin;
use App\Models\Ibu;

class IbuBersalinController extends BaseCrudController
{
    protected $model = IbuBersalin::class;
    protected $tableName = 'ibu_bersalin';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Ibu Bersalin';
}
