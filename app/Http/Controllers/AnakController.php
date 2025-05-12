<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Wali;

class AnakController extends BaseCrudController
{
    protected $model = Anak::class;
    protected $tableName = 'anak';
    protected $foreignModel = Wali::class;
    protected $foreignRelation = 'wali';
    protected $foreignColumns = ['id_wali', 'nama'];
    protected $validationRules = [
        'id_wali' => 'required|exists:wali,id_wali',
        'nama' => 'nullable|string',
        'anak_ke' => 'nullable|integer',
        'no_akte_kelahiran' => 'nullable|string',
        'nik' => 'nullable|string',
        'tmpt_lahir' => 'nullable|string',
        'tgl_lahir' => 'nullable|date',
        'gol_darah' => 'nullable|string',
        'jenis_pelayanan' => 'nullable|string',
        'no_asuransi' => 'nullable|string',
        'tgl_berlaku_asuransi' => 'nullable|date',
        'fasilitas_pelayanan_kesehatan' => 'nullable|string',
        'no_reg_kohort_bayi' => 'nullable|string',
        'no_reg_kohort_balita' => 'nullable|string',
        'no_catatan_medik_rs' => 'nullable|string',
        'provinsi' => 'nullable|string',
        'kabupaten' => 'nullable|string',
        'alamat' => 'nullable|string',
        'telepon' => 'nullable|string',
    ];
}
