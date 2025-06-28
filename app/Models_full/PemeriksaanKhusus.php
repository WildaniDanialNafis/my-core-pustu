<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanKhusus extends Model
{
    /** @use HasFactory<\Database\Factories\PemeriksaanKhususFactory> */
    use HasFactory;

    protected $table = 'pemeriksaan_khusus';

    protected $primaryKey = 'id_pemeriksaan_khusus';

    protected $fillable = [
        'id_evaluasi_kesehatan_bumil',
        'inspekulo',
        'vulva',
        'uretra',
        'vagina',
        'fluksus',
        'fluor',
        'porsio'
    ];

    public function evaluasiKesehatanBumil()
    {
        return $this->belongsTo(EvaluasiKesehatanBumil::class,'id_evaluasi_kesehatan_bumil');
    }
}
