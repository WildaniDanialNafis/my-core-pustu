<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaPemeriksaanFisik extends Model
{
    /** @use HasFactory<\Database\Factories\KriteriaPemeriksaanFisikFactory> */
    use HasFactory;

    protected $table = 'kriteria_pemeriksaan_fisik';

    protected $primaryKey = 'id_kriteria_pemeriksaan_fisik';

    protected $fillable = [
        'kriteria_pemeriksaan_fisik'
    ];

    public function preeklampsiaFisik()
    {
        return $this->hasMany(PreeklampsiaFisik::class, 'id_kriteria_pemeriksaan_fisik');
    }
}
