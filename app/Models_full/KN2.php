<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KN2 extends Model
{
    /** @use HasFactory<\Database\Factories\KN2Factory> */
    use HasFactory;

    protected $table = 'kn2';

    protected $primaryKey = 'id_kn2';

    protected $fillable = [
        'id_pelayanan_kesehatan_neonatus',
        'menyusu',
        'tali_pusat',
        'tanda_bahaya',
        'identifikasi_kuning',
        'imunisasi_hb',
        'tanggal',
        'nomor_batch',
        'skrining_hipotiroid_kogenital',
        'masalah',
        'dirujuk_ke',
        'nama_jelas_petugas'
    ];

    public function pelayananKesehatanNeonatus()
    {
        return $this->belongsTo(PelayananKesehatanNeonatus::class,'id_pelayanan_kesehatan_neonatus');
    }
}
