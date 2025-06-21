<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\PelayananKesehatanNeonatus;

class PelayananKesehatanNeonatusController extends BaseCrudController
{
    protected $model = PelayananKesehatanNeonatus::class;
    protected $tableName = 'pelayanan_kesehatan_neonatus';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Pelayanan Kesehatan Neonatus';
}
