<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BayiBaruLahir extends Model
{
    /** @use HasFactory<\Database\Factories\BayiBaruLahirFactory> */
    use HasFactory;

    protected $table = 'bayi_baru_lahir';

    protected $primaryKey = 'id_bayi_baru_lahir';

    protected $fillable = [
        'id_anak',
        'kn',
        'tanggal',
        'tempat',
        'perawatan_tali_pusat',
        'imd',
        'vitamin_k1',
        'imunisasi_hepatitis_b',
        'jenis_salep',
        'salep',
        'jenis_skrining',
        'status_skrining',
        'kie',
        'ppia1',
        'ppia2',
        'ppia3'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
