<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KondisiKesehatanBumil extends Model
{
    /** @use HasFactory<\Database\Factories\KondisiKesehatanBumilFactory> */
    use HasFactory;

    protected $table = 'kondisi_kesehatan_bumil';

    protected $primaryKey = 'id_kondisi_kesehatan_bumil';

    protected $fillable = [
        'id_evaluasi_kesehatan_bumil',
        'tanggal_periksa',
        'tb',
        'bb',
        'lila',
        'imt',
        'status'
    ];

    public function evaluasiKesehatanBumil()
    {
        return $this->belongsTo(EvaluasiKesehatanBumil::class, 'id_evaluasi_kesehatan_bumil');
    }
}
