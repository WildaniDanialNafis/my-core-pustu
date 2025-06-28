<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPerilakuBerisiko extends Model
{
    /** @use HasFactory<\Database\Factories\RiwayatPerilakuBerisikoFactory> */
    use HasFactory;
    
    protected $table = 'riwayat_perilaku_berisiko';

    protected $primaryKey = 'id_riwayat_perilaku_berisiko';

    protected $fillable = [
        'id_evaluasi_kesehatan_bumil',
        'perilaku',
        'penjelasan'
    ];

    public function evaluasiKesehatanBumil()
    {
        return $this->belongsTo(EvaluasiKesehatanBumil::class,'id_evaluasi_kesehatan_bumil');
    }
}
