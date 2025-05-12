<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use App\Models\Ibu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class KeluargaController extends BaseCrudController
{
    protected $model = Keluarga::class;
    protected $tableName = 'keluarga';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'nama' => 'nullable|string|max:255',
        'pembiayaan' => 'nullable|string|max:255',
        'no_jkn' => 'nullable|string|max:50',
        'faskes_tk_1' => 'nullable|string|max:255',
        'faskes_rujukan' => 'nullable|string|max:255',
        'gol_darah' => 'nullable|string|max:2',
        'tmpt_lahir' => 'nullable|string|max:100',
        'tgl_lahir' => 'nullable|date',
        'pendidikan' => 'nullable|string|max:100',
        'pekerjaan' => 'nullable|string|max:100',
        'provinsi' => 'nullable|string|max:100',
        'kabupaten' => 'nullable|string|max:100',
        'alamat' => 'nullable|string',
        'telepon' => 'nullable|string|max:20',
    ];
}
