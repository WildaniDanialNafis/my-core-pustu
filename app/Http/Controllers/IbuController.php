<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class IbuController extends BaseCrudController
{
    protected $model = Ibu::class;
    protected $tableName = 'ibu';
    protected $foreignModel = User::class;
    protected $foreignColumns = ['id_user', 'name'];
    protected $title = 'Ibu';
    protected $validationRules = [
        'id_user' => 'required|exists:users,id_user',
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
        'puskesmas_domisili' => 'nullable|string|max:255',
        'no_reg_kohort_ibu' => 'nullable|string|max:50',
    ];
}