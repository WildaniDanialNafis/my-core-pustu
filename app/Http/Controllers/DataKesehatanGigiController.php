<?php

namespace App\Http\Controllers;

use App\Models\DataKesehatanGigi;
use App\Models\KesehatanGigi;

class DataKesehatanGigiController extends BaseCrudController
{
    protected $model = DataKesehatanGigi::class;
    protected $tableName = 'data_kesehatan_gigi';
    protected $foreignModel = KesehatanGigi::class;
    protected $foreignRelation = 'kesehatanGigi';
    protected $foreignColumns = ['id_kesehatan_gigi', 'nama'];
    protected $title = 'Data Kesehatan Gigi';
}
