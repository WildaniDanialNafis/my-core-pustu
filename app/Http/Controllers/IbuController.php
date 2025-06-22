<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\User;

class IbuController extends BaseCrudController
{
    protected $model = Ibu::class;
    protected $tableName = 'ibu';
    protected $foreignModel = User::class;
    protected $foreignColumns = ['id_user', 'name'];
    protected $foreignRelation = 'user';
    protected $title = 'Ibu';   
}
