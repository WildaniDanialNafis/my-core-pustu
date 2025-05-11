<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KN1 extends Model
{
    /** @use HasFactory<\Database\Factories\KN1Factory> */
    use HasFactory;

    protected $table = 'kn1';

    protected $primaryKey = 'id_kn1';

    protected $fillable = [
        'id_pelayanan_kesehatan_neonatus',
        'menyusu',
        'tali_pusat',
        'vit_k1',
        'salep',
        'tetes_mata',
        'imunisasi_hb',
        'tanggal',
        'nomor_batch',
        'bb',
        'pb',
        'lk',
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
