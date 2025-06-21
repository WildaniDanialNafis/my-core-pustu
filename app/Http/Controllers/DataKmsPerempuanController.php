<?php

namespace App\Http\Controllers;

use App\Models\DataKmsPerempuan;
use App\Models\KmsPerempuan;

class DataKmsPerempuanController extends BaseCrudController
{
    protected $model = DataKmsPerempuan::class;
    protected $tableName = 'data_kms_perempuan';
    protected $foreignModel = KmsPerempuan::class;
    protected $foreignRelation = 'kmsPerempuan';
    protected $foreignColumns = ['id_kms_perempuan', 'nama_anak'];
    protected $title = 'Data KMS Anak Perempuan';
}
