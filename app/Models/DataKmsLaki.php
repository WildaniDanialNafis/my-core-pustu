<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKmsLaki extends Model
{
    /** @use HasFactory<\Database\Factories\DataKmsLakiFactory> */
    use HasFactory;

    protected $table = 'data_kms_laki';

    protected $primaryKey = 'id_data_kms_laki';

    protected $fillable = [
        'id_kms_laki',
        'umur',
        'bulan_penimbangan',
        'bb',
        'kbm',
        'n_t',
        'asi_eksklusif'
    ];

    public function kmsLaki()
    {
        return $this->belongsTo(KmsLaki::class,'id_kms_laki');
    }
}
