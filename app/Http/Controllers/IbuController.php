<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\User;
use Illuminate\Http\Request;

class IbuController extends BaseCrudController
{
    protected $model = Ibu::class;
    protected $tableName = 'ibu';
    protected $foreignModel = User::class;
    protected $foreignColumns = ['id_user', 'name'];
    protected $foreignRelation = 'user'; // <-- tambahkan ini
    protected $title = 'Ibu';   
}
