<?php

namespace App\Http\Controllers;

use App\Models\Wali;
use App\Models\User;

class WaliController extends BaseCrudController
{
    protected $model = Wali::class;
    protected $tableName = 'wali';
    protected $foreignModel = User::class;
    protected $foreignRelation = 'user';
    protected $foreignColumns = ['id_user', 'name'];
    protected $title = 'Wali';
}
