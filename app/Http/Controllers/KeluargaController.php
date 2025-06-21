<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use App\Models\Ibu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class KeluargaController extends BaseCrudController
{
    protected $model = Keluarga::class;
    protected $tableName = 'keluarga';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $title = 'Keluarga';
}
