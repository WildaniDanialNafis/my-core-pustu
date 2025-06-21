<?php

namespace App\Http\Controllers;

use App\Models\Kesehatan2;
use App\Models\Kesehatan1;

class Kesehatan2Controller extends BaseCrudController
{
    protected $model = Kesehatan2::class;
    protected $tableName = 'kesehatan2';
    protected $foreignModel = Kesehatan1::class;
    protected $foreignRelation = 'kesehatan1';
    protected $foreignColumns = ['id_kesehatan1', 'id_kesehatan1']; // atau ganti kolom kedua sesuai yang ingin ditampilkan
    protected $title = 'Kesehatan 2';
}
