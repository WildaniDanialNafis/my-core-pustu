<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsgTri3 extends Model
{
    /** @use HasFactory<\Database\Factories\UsgTri3Factory> */
    use HasFactory;
    
    protected $table = 'usg_tri3';

    protected $primaryKey = 'id_usg_tri3';

    protected $fillable = [
        'id_pemeriksaan_trimester3',
        'hpht',
        'kehamilan',
        'janin',
        'bpd',
        'jumlah_janin',
        'hc',
        'letak_janin',
        'berat_janin',
        'fl',
        'plasenta',
        'cairan_ketuban',
        'usia_kehamilan'
    ];

    public function pemeriksaanTrimester3()
    {
        return $this->belongsTo(PemeriksaanTrimester3::class,'id_pemeriksaan_trimester3');
    }
}
