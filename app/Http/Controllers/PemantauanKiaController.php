<?php

namespace App\Http\Controllers;

use App\Models\PemantauanKia;
use App\Models\Anak;

class PemantauanKiaController extends BaseCrudController
{
    protected $model = PemantauanKia::class;
    protected $tableName = 'pemantauan_kia';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'id_ceklis' => 'required|integer|between:1,10',
        'hasil_pemantauan' => 'nullable|in:Lengkap,Tidak Lengkap',
    ];
}
