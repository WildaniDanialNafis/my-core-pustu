<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKmsPerempuan extends Model
{
    /** @use HasFactory<\Database\Factories\DataKmsPerempuanFactory> */
    use HasFactory;

    protected $table = 'data_kms_perempuan';

    protected $primaryKey = 'id_data_kms_perempuan';

    protected $fillable = [
        'id_kms_perempuan',
        'umur',
        'bulan_penimbangan',
        'bb',
        'kbm',
        'n_t',
        'asi_ekslusif'
    ];

    public function kmsPerempuan()
    {
        return $this->belongsTo(KmsPerempuan::class, 'id_kms_perempuan');
    }
}
