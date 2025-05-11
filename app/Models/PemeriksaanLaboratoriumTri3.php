<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanLaboratoriumTri3 extends Model
{
    /** @use HasFactory<\Database\Factories\PemeriksaanLaboratoriumTri3Factory> */
    use HasFactory;

    protected $table = 'pemeriksaan_laboratorium_tri3';

    protected $primaryKey = 'id_pemeriksaan_laboratorium_tri3';

    protected $fillable = [
        'id_pemeriksaan_trimester3',
        'tanggal',
        'hemoglobin',
        'tindak_hemoglobin',
        'gula_darah_puasa',
        'tindak_gula_puasa',
        'gula_darah_2_jam_post_pradinal',
        'tindak_gula_darah_2_jam_post_pradinal'  
    ];

    public function pemeriksaanTrimester3()
    {
        return $this->belongsTo(PemeriksaanTrimester3::class, 'id_pemeriksaan_trimester3');
    }
}
