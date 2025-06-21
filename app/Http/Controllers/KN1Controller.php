<?php

namespace App\Http\Controllers;

use App\Models\KN1;
use App\Models\PelayananKesehatanNeonatus;

class KN1Controller extends BaseCrudController
{
    protected $model = KN1::class;
    protected $tableName = 'kn1';
    protected $foreignModel = PelayananKesehatanNeonatus::class;
    protected $foreignRelation = 'pelayananKesehatanNeonatus';
    protected $foreignColumns = ['id_pelayanan_kesehatan_neonatus', 'id_pelayanan_kesehatan_neonatus'];
    protected $title = 'Kesehatan Neonatus 1';
}
