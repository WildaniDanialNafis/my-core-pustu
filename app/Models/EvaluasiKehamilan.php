<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiKehamilan extends Model
{
    /** @use HasFactory<\Database\Factories\EvaluasiKehamilanFactory> */
    use HasFactory;

    protected $table = 'evaluasi_kehamilan';

    protected $primaryKey = 'id_evaluasi_kehamilan';

    protected $fillable = [
        'id_ibu',
        'pemeriksa',
        'tanggal',
        'usia_gestasi',
        'denyut_jantung_janin',
        'sistolik',
        'diastolik',
        'gerakan_bayi',
        'urin_protein',
        'urin_reduksi',
        'hemoglobin',
        'kalsium',
        'aspirin'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }
}
