<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanTrimester1 extends Model
{
    /** @use HasFactory<\Database\Factories\PemeriksaanTrimester1Factory> */
    use HasFactory;
    
    protected $table = 'pemeriksaan_trimester1';

    protected $primaryKey = 'id_pemeriksaan_trimester1';

    protected $fillable = [
        'id_ibu',
        'kesimpulan',
        'rekomendasi'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }

    public function pemeriksaanFisikTri1()
    {
        return $this->hasMany(PemeriksaanTrimester1::class,'id_pemeriksaan_trimester1');
    }
    public function usgTri1()
    {
        return $this->hasMany(UsgTri1::class,'id_pemeriksaan_trimester1');
    }

    public function pemeriksaanLaboratoriumTri1()
    {
        return $this->hasMany(PemeriksaanLaboratoriumTri1::class,'id_pemeriksaan_trimester1');
    }
}
