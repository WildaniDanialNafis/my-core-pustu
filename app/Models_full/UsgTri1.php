<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsgTri1 extends Model
{
    /** @use HasFactory<\Database\Factories\UsgTri1Factory> */
    use HasFactory;
    
    protected $table = 'usg_tri1';

    protected $primaryKey = 'id_usg_tri1';

    protected $fillable = [
        'id_pemeriksaan_trimester1',
        'gestational_sac',
        'crown_rump_length',
        'denyut_jantung_janin',
        'sesuai_usia_kehamilan',
        'letak_janin',
        'taksiran_persalinan',
        'hasil_usg'
    ];

    public function pemeriksaanTrimester1()
    {
        return $this->belongsTo(PemeriksaanTrimester1::class, 'id_pemeriksaan_trimester1');
    }
}
