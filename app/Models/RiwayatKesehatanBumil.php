<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKesehatanBumil extends Model
{
    /** @use HasFactory<\Database\Factories\RiwayatKesehatanBumilFactory> */
    use HasFactory;

    protected $table = 'riwayat_kesehatan_bumil';

    protected $primaryKey = 'id_riwayat_kesehatan_bumil';

    protected $fillable = [
        'id_evaluasi_kesehatan_bumil',
        'riwayat_penyakit'
    ];

    public function evaluasiKesehatanBumil()
    {
        return $this->belongsTo(EvaluasiKesehatanBumil::class,'id_evaluasi_kesehatan_bumil');
    }
}
