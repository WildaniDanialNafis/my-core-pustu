<?php

namespace App\Http\Controllers;

use App\Models\KmsLaki;
use App\Models\DataKmsLaki;

class DataKmsLakiController extends BaseCrudController
{
    protected $model = DataKmsLaki::class;
    protected $tableName = 'data_kms_laki';
    protected $foreignModel = KmsLaki::class;
    protected $foreignRelation = 'kmsLaki';
    protected $foreignColumns = ['id_kms_laki', 'nama_anak'];
    protected $title = 'Data KMS Anak Laki-laki';
}
