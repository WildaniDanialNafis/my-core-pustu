<?php

namespace App\Http\Controllers;

use App\Models\SkriningPreeklampsia;
use App\Models\Ibu;

class SkriningPreeklampsiaController extends BaseCrudController
{
    protected $model = SkriningPreeklampsia::class;
    protected $tableName = 'skrining_preeklampsia';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Skrining Preeklampsia';
}
