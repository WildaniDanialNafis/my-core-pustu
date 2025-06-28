<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesehatan2 extends Model
{
    use HasFactory;

    protected $table = 'kesehatan2';

    protected $primaryKey = 'id_kesehatan2';
    
    protected $fillable = [
        'id_kesehatan1',
        'trimester',
        'tanggal_periksa',
        'tempat',
        'timbang',
        'ukur_lingkar_lengan_atas',
        'tekanan_darah_sistolik',
        'tekanan_darah_diastolik',
        'periksa_tinggi_rahim',
        'periksa_letak_dan_denyut_jantung_janin',
        'konseling',
        'skrining_dokter',
        'tablet_tambah_darah',
        'test_lab_hemoglobin',
        'test_golongan_darah',
        'test_lab_protein_urine',
        'test_lab_gula_darah',
        'ppia1',
        'ppia2',
        'ppia3',
        'test_laksana_kasus'
    ];

    public function kesehatan1()
    {
        return $this->belongsTo(Kesehatan1::class, 'id_kesehatan1');
    }
}
