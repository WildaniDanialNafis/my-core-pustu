<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\RingkasanPelayananDokter;

class RingkasanPelayananDokterController extends BaseCrudController
{
    protected $model = RingkasanPelayananDokter::class;
    protected $tableName = 'ringkasan_pelayanan_dokter';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'Ringkasan Pelayanan Dokter';
}
