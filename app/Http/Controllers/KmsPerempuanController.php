<?php

namespace App\Http\Controllers;

use App\Models\KmsPerempuan;
use App\Models\Anak;

class KmsPerempuanController extends BaseCrudController
{
    protected $model = KmsPerempuan::class;
    protected $tableName = 'kms_perempuan';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];
    protected $title = 'KMS Anak Perempuan';
}
