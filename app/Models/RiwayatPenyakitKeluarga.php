<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPenyakitKeluarga extends Model
{
    /** @use HasFactory<\Database\Factories\RiwayatPenyakitKeluargaFactory> */
    use HasFactory;

    protected $table = 'riwayat_penyakit_keluarga';

    protected $primaryKey = 'id_riwayat_penyakit_keluarga';

    protected $fillable = [
        'id_evaluasi_kesehatan_bumil',
        'riwayat_penyakit',
        'penjelasan'
    ];

    public function evaluasiKesehatanBumil()
    {
        return $this->belongsTo(EvaluasiKesehatanBumil::class,'id_evaluasi_kesehatan_bumil');
    }
}
