<?php

namespace App\Http\Controllers;

use App\Models\PenyimpanganPertumbuhan;
use App\Models\PelayananSdidtk;

class PenyimpanganPertumbuhanController extends BaseCrudController
{
    protected $model = PenyimpanganPertumbuhan::class;
    protected $tableName = 'penyimpangan_pertumbuhan';
    protected $foreignModel = PelayananSdidtk::class;
    protected $foreignRelation = 'pelayananSdidtk';
    protected $foreignColumns = ['id_pelayanan_sdidtk', 'id_pelayanan_sdidtk'];
    protected $title = 'Penyimpangan Pertumbuhan';
}
