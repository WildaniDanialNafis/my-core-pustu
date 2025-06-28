<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KN3 extends Model
{
    /** @use HasFactory<\Database\Factories\KN3Factory> */
    use HasFactory;

    protected $table = 'kn3';

    protected $primaryKey = 'id_kn3';

    protected $fillable = [
        'id_pelayanan_kesehatan_neonatus',
        'menyusu',
        'tali_pusat',
        'tanda_bahaya',
        'identifikasi_kuning',
        'keterangan_identifikasi_kuning',
        'masalah',
        'dirujuk_ke',
        'nama_jelas_petugas'
    ];

    public function pelayananKesehatanNeonatus()
    {
        return $this->hasMany(PelayananKesehatanNeonatus::class, 'id_pelayanan_kesehatan_neonatus');
    }
}
