<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RujukanAnak extends Model
{
    /** @use HasFactory<\Database\Factories\RujukanAnakFactory> */
    use HasFactory;

    protected $table = 'rujukan_anak';

    protected $primaryKey = 'id_rujukan_anak';

    protected $fillable = [
        'id_anak',
        'tanggal',
        'dirujuk_ke',
        'sebab_dirujuk',
        'diagnosis_sementara',
        'tindakan_sementara',
        'nama_yang_merujuk',
        'paraf_yang_merujuk'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
