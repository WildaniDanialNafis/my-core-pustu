<?php

namespace App\Http\Controllers;

use App\Models\BayiBaruLahir;
use App\Models\Anak;

class BayiBaruLahirController extends BaseCrudController
{
    protected $model = BayiBaruLahir::class;
    protected $tableName = 'bayi_baru_lahir';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'kn' => 'nullable|in:0,1,2,3',
        'tanggal' => 'nullable|date',
        'tempat' => 'nullable|string|max:255',
        'perawatan_tali_pusat' => 'nullable|string|max:255',
        'imd' => 'nullable|string|max:255',
        'vitamin_k1' => 'nullable|string|max:255',
        'imunisasi_hepatitis_b' => 'nullable|string|max:255',
        'jenis_salep' => 'nullable|in:Salep,Tetes Mata Antibiotik',
        'salep' => 'nullable|string|max:255',
        'jenis_skrining' => 'nullable|in:Skrining BBL,SHK',
        'status_skrining' => 'nullable|string|max:255',
        'kie' => 'nullable|string|max:255',
        'ppia1' => 'nullable|string|max:255',
        'ppia2' => 'nullable|string|max:255',
        'ppia3' => 'nullable|string|max:255',
    ];
}
