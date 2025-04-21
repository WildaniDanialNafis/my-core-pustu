<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreeklampsiaFisik extends Model
{
    /** @use HasFactory<\Database\Factories\PreeklampsiaFisikFactory> */
    use HasFactory;

    protected $table = 'preeklampsia_fisik';

    protected $primaryKey = 'id_preeklampsia_fisik';

    protected $fillable = [
        'id_skrining_preeklampsia',
        'id_kriteria_pemeriksaan_fisik',
        'risiko'
    ];

    public function skriningPreeklampsia()
    {
        return $this->belongsTo(SkriningPreeklampsia::class,'id_skrining_preeklampsia');
    }

    public function kriteriaPemeriksaanFisik()
    {
        return $this->belongsTo(KriteriaPemeriksaanFisik::class,'id_kriteria_pemeriksaan_fisik');
    }
}
