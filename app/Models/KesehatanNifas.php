<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesehatanNifas extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_nifas';

    protected $primaryKey = 'id_kesehatan_nifas';

    protected $fillable = [
        'id_ibu',
        'tanggal_periksa',
        'tempat',
        'periksa_payudara',
        'periksa_pendarahan',
        'periksa_jalan_lahir',
        'vitamin_a',
        'kb_pasca_persalinan',
        'konseling',
        'test_laksana_kasus'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }
}
