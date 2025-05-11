<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RingkasanKesehatan extends Model
{
    /** @use HasFactory<\Database\Factories\RingkasanKesehatanFactory> */
    use HasFactory;

    protected $table = 'ringkasan_kesehatan';

    protected $primaryKey = 'id_ringkasan_kesehatan';
    
    protected $fillable = [
        'id_ibu',
        'tanggal_periksa',
        'nama',
        'paraf',
        'keluhan',
        'pemeriksaan',
        'tindakan',
        'tanggal_kembali'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }
}
