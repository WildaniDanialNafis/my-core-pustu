<?php

namespace App\Http\Controllers;

use App\Models\KN2;
use App\Models\PelayananKesehatanNeonatus;

class KN2Controller extends BaseCrudController
{
    protected $model = KN2::class;
    protected $tableName = 'kn2';
    protected $foreignModel = PelayananKesehatanNeonatus::class;
    protected $foreignRelation = 'pelayananKesehatanNeonatus';
    protected $foreignColumns = ['id_pelayanan_kesehatan_neonatus', 'id_pelayanan_kesehatan_neonatus'];
    protected $title = 'Kesehatan Neonatus 2';
}
