<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanFisikTri1 extends Model
{
    /** @use HasFactory<\Database\Factories\PemeriksaanFisikTri1Factory> */
    use HasFactory;

    protected $table = 'pemeriksaan_fisik_tri1';

    protected $primaryKey = 'id_pemeriksaan_fisik_tri1';

    protected $fillable = [
        'id_pemeriksaan_trimester1',
        'konjuctiva',
        'sklera',
        'kulit',
        'leher',
        'gigi_mulut',
        'tht',
        'jantung',
        'paru',
        'perut',
        'tungkai'
    ];

    public function pemeriksaanTrimester1()
    {
        return $this->belongsTo(PemeriksaanTrimester1::class,'id_pemeriksaan_trimester1');
    }
}
