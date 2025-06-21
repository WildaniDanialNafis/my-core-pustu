<?php

namespace App\Http\Controllers;

use App\Models\KN0;
use App\Models\PelayananKesehatanNeonatus;

class KN0Controller extends BaseCrudController
{
    protected $model = KN0::class;
    protected $tableName = 'kn0';
    protected $foreignModel = PelayananKesehatanNeonatus::class;
    protected $foreignRelation = 'pelayananKesehatanNeonatus';
    protected $foreignColumns = ['id_pelayanan_kesehatan_neonatus', 'id_pelayanan_kesehatan_neonatus']; 
    protected $title = 'Kesehatan Neonatus 0';
}
