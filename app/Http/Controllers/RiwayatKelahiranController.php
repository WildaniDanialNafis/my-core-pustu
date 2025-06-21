<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\RiwayatKelahiran;

class RiwayatKelahiranController extends BaseCrudController
{
    protected $model = RiwayatKelahiran::class;
    protected $tableName = 'riwayat_kelahiran';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Riwayat Kelahiran';
}
