<?php

namespace App\Http\Controllers;

use App\Models\Wali;
use App\Models\User;

class WaliController extends BaseCrudController
{
    protected $model = Wali::class;
    protected $tableName = 'wali';
    protected $foreignModel = User::class;
    protected $foreignRelation = 'user';
    protected $foreignColumns = ['id_user', 'name'];
    protected $validationRules = [
        'id_user' => 'required|exists:users,id_user',
        'nama' => 'nullable|string',
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
        'pendidikan' => 'nullable|string',
        'pekerjaan' => 'nullable|string',
        'provinsi' => 'nullable|string',
        'kabupaten' => 'nullable|string',
        'alamat' => 'nullable|string',
        'telepon' => 'nullable|string',
        'email' => 'nullable|email',
    ];
}
