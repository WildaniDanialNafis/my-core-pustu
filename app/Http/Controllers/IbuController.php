<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\User;
use Illuminate\Http\Request;

class IbuController extends BaseCrudController
{
    protected $model = Ibu::class;
    protected $tableName = 'ibu';
    protected $foreignModel = User::class;
    protected $foreignColumns = ['id_user', 'name'];
    protected $foreignRelation = 'user'; // <-- tambahkan ini
    protected $title = 'Ibu';
    protected $validationRules = [
        'id_user' => 'required|exists:users,id_user',
        'nama' => 'required|string|max:255',
        'pembiayaan' => 'required|string|max:255',
        'no_jkn' => 'required|string|max:50',
        'faskes_tk_1' => 'required|string|max:255',
        'faskes_rujukan' => 'required|string|max:255',
        'gol_darah' => 'required|string|max:2',
        'tmpt_lahir' => 'required|string|max:100',
        'tgl_lahir' => 'required|date',
        'pendidikan' => 'required|string|max:100',
        'pekerjaan' => 'required|string|max:100',
        'provinsi' => 'required|string|max:100',
        'kabupaten' => 'required|string|max:100',
        'alamat' => 'required|string',
        'telepon' => 'required|string|max:20',
        'puskesmas_domisili' => 'required|string|max:255',
        'no_reg_kohort_ibu' => 'required|string|max:50',
    ];    
}
