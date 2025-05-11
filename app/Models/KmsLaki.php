<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KmsLaki extends Model
{
    /** @use HasFactory<\Database\Factories\KmsLakiFactory> */
    use HasFactory;

    protected $table = 'kms_laki';

    protected $primaryKey = 'id_kms_laki';

    protected $fillable = [
        'id_anak',
        'nama_anak',
        'posyandu'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }

    public function dataKmsLaki()
    {
        return $this->hasMany(DataKmsLaki::class, 'id_kms_laki');
    }
}
