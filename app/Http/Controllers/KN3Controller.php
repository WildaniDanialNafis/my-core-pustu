<?php

namespace App\Http\Controllers;

use App\Models\KN3;
use App\Models\PelayananKesehatanNeonatus;

class KN3Controller extends BaseCrudController
{
    protected $model = KN3::class;
    protected $tableName = 'kn3';
    protected $foreignModel = PelayananKesehatanNeonatus::class;
    protected $foreignRelation = 'pelayananKesehatanNeonatus';
    protected $foreignColumns = ['id_pelayanan_kesehatan_neonatus', 'id_pelayanan_kesehatan_neonatus'];
    protected $title = 'Kesehatan Neonatus 3';
}
