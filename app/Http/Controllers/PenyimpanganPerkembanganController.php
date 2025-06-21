<?php

namespace App\Http\Controllers;

use App\Models\PenyimpanganPerkembangan;
use App\Models\PelayananSdidtk;

class PenyimpanganPerkembanganController extends BaseCrudController
{
    protected $model = PenyimpanganPerkembangan::class;
    protected $tableName = 'penyimpangan_perkembangan';
    protected $foreignModel = PelayananSdidtk::class;
    protected $foreignRelation = 'pelayananSdidtk';
    protected $foreignColumns = ['id_pelayanan_sdidtk', 'id_pelayanan_sdidtk'];
    protected $title = 'Penyimpangan Perkembangan';
}
