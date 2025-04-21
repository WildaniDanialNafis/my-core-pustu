<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanFisikTri3 extends Model
{
    /** @use HasFactory<\Database\Factories\PemeriksaanFisikTri3Factory> */
    use HasFactory;
    
    protected $table = 'pemeriksaan_fisik_tri3';

    protected $primaryKey = 'id_pemeriksaan_fisik_tri3';

    protected $fillable = [
        'id_pemeriksaan_trimester3',
        'keadaan_umum',
        'konjuctiva',
        'sklera',
        'gigi_mulut',
        'tht',
        'leher',
        'jantung',
        'paru',
        'perut',
        'tungkai'
    ];

    public function pemeriksaanTrimester3()
    {
        return $this->belongsTo(PemeriksaanTrimester3::class, 'id_pemeriksaan_trimester3');
    }
}
