<?php

namespace App\Http\Controllers;

use App\Models\PreeklampsiaAnamnesis;
use App\Models\SkriningPreeklampsia;

class PreeklampsiaAnamnesisController extends BaseCrudController
{
    protected $model = PreeklampsiaAnamnesis::class;
    protected $tableName = 'preeklampsia_anamnesis';
    protected $foreignModel = SkriningPreeklampsia::class;
    protected $foreignRelation = 'skriningPreeklampsia';
    protected $foreignColumns = ['id_skrining_preeklampsia', 'nama_dokter'];
    protected $title = 'Preeklampsia Anamnesis';
}
