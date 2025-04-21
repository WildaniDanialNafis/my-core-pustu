<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKehamilan extends Model
{
    /** @use HasFactory<\Database\Factories\RiwayatKehamilanFactory> */
    use HasFactory;

    protected $table = 'riwayat_kehamilan';

    protected $primaryKey = 'id_riwayat_kehamilan';

    protected $fillable = [
        'id_evaluasi_kesehatan_bumil',
        'tahun',
        'berat_lahir',
        'persalinan',
        'penolong_persalinan',
        'komplikasi'  
    ];

    public function evaluasiKesehatanBumil()
    {
        return $this->belongsTo(EvaluasiKesehatanBumil::class,'id_evaluasi_kesehatan_bumil');
    }
}
