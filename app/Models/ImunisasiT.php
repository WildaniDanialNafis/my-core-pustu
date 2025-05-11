<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImunisasiT extends Model
{
    /** @use HasFactory<\Database\Factories\ImunisasiTFactory> */
    use HasFactory;

    protected $table = 'imunisasi_t';

    protected $primaryKey = 'id_imunisasi_t';

    protected $fillable = [
        'id_evaluasi_kesehatan_bumil',
        'tt_ke',
        'status',
    ];

    public function evaluasiKesehatanBumil()
    {
        return $this->belongsTo(EvaluasiKesehatanBumil::class, 'id_evaluasi_kesehatan_bumil');
    }
}
