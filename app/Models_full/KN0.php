<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KN0 extends Model
{
    /** @use HasFactory<\Database\Factories\KN0Factory> */
    use HasFactory;

    protected $table = 'kn0';

    protected $primaryKey = 'id_kn0';

    protected $fillable = [
        'id_pelayanan_kesehatan_neonatus',
        'kondisi',
        'bb',
        'pb',
        'lk',
        'imd',
        'vit_k1',
        'salep',
        'tetes_mata',
        'imunisasi_hb',
        'tanggal',
        'nomor_batch',
        'masalah',
        'dirujuk_ke',
        'nama_jelas_petugas'
    ];  

    public function pelayananKesehatanNeonatus()
    {
        return $this->belongsTo(PelayananKesehatanNeonatus::class,'id_pelayanan_kesehatan_neonatus');
    }
}
