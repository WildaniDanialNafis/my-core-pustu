<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KmsPerempuan extends Model
{
    /** @use HasFactory<\Database\Factories\KmsPerempuanFactory> */
    use HasFactory;

    protected $table = 'kms_perempuan';

    protected $primaryKey = 'id_kms_perempuan';

    protected $fillable = [
        'id_anak',
        'nama_anak',
        'nama_posyandu'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }

    public function dataKmsPerempuan()
    {
        return $this->hasMany(DataKmsPerempuan::class,'id_kms_perempuan');
    }
}
