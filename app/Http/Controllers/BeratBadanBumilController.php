<?php

namespace App\Http\Controllers;

use App\Models\BeratBadanBumil;
use App\Models\Ibu;

class BeratBadanBumilController extends BaseCrudController
{
    protected $model = BeratBadanBumil::class;
    protected $tableName = 'berat_badan_bumil';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Berat Badan Bumil';
}
