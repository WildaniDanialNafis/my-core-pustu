<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\KmsLaki;

class KmsLakiController extends BaseCrudController
{
    protected $model = KmsLaki::class;
    protected $tableName = 'kms_laki';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'KMS Anak Laki-laki';
}
