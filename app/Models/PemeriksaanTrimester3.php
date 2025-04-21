<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanTrimester3 extends Model
{
    /** @use HasFactory<\Database\Factories\PemeriksaanTrimester3Factory> */
    use HasFactory;

    protected $table = 'pemeriksaan_trimester3';

    protected $primaryKey = 'id_pemeriksaan_trimester3';

    protected $fillable = [
        'id_ibu',
        'kesimpulan',
        'rencana_konsultasi_lanjut',
        'rencana_tempat_bersalin',
        'rencana_kontrasepsi',
        'konseling',
        'jelaskan',
        'kesimpulan'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }

    public function pemeriksaanFisikTri3()
    {
        return $this->hasMany(PemeriksaanFisikTri3::class, 'id_pemeriksaan_trimester3');
    }

    public function usgTri3()
    {
        return $this->hasMany(UsgTri3::class,'id_pemeriksaan_trimester3');
    }

    public function pemeriksaanTrimester3()
    {
        return $this->hasMany(PemeriksaanLaboratoriumTri3::class, 'id_pemeriksaan_trimester3');
    }
}
