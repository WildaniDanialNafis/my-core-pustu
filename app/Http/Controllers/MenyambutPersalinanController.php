<?php

namespace App\Http\Controllers;

use App\Models\MenyambutPersalinan;
use App\Models\Ibu;

class MenyambutPersalinanController extends BaseCrudController
{
    protected $model = MenyambutPersalinan::class;
    protected $tableName = 'menyambut_persalinan';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|integer',
        'nama_pembuat' => 'nullable|string',
        'alamat' => 'nullable|string',
        'perkiraan_bulan_lahir' => 'nullable|string',
        'perkiraan_tahun_lahir' => 'nullable|string',
        'dana_persalinan' => 'nullable|string',
        'dibantu_oleh' => 'nullable|string',
        'metode_kontrasepsi' => 'nullable|string',
        'golongan_darah' => 'nullable|string',
        'rhesus' => 'nullable|string',
        'bersedia_dirujuk' => 'nullable|string',
        'tanggal' => 'nullable|date',
        'persetujuan' => 'nullable|string',
        'paraf_persetujuan' => 'nullable|string',
        'nama_persetujuan' => 'nullable|string',
        'paraf_bumil' => 'nullable|string',
        'nama_bumil' => 'nullable|string',
        'nakes' => 'nullable|string',
        'paraf_nakes' => 'nullable|string',
        'nama_nakes' => 'nullable|string',
    ];
}
