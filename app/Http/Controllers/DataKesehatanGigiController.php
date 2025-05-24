<?php

namespace App\Http\Controllers;

use App\Models\DataKesehatanGigi;
use App\Models\KesehatanGigi;

class DataKesehatanGigiController extends BaseCrudController
{
    protected $model = DataKesehatanGigi::class;
    protected $tableName = 'data_kesehatan_gigi';
    protected $foreignModel = KesehatanGigi::class;
    protected $foreignRelation = 'kesehatanGigi';
    protected $foreignColumns = ['id_kesehatan_gigi', 'nama'];

    protected $validationRules = [
        'id_kesehatan_gigi' => 'required|exists:kesehatan_gigi,id_kesehatan_gigi',
        'pemeriksaan' => 'nullable|date',
        'jumlah_gigi' => 'nullable|integer|min:0',
        'jumlah_gigi_berlubang' => 'nullable|integer|min:0',
        'plak' => 'nullable|in:Bersih,Kotor',
        'risiko_gigi_berlubang' => 'nullable|in:Tinggi,Sedang,Rendah',
    ];
}
