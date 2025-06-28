<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RingkasanPelayananDokter extends Model
{
    /** @use HasFactory<\Database\Factories\RingkasanPelayananDokterFactory> */
    use HasFactory;

    protected $table = 'ringkasan_pelayanan_dokter';

    protected $primaryKey = 'id_ringkasan_pelayanan_dokter';

    protected $fillable = [
        'id_anak',
        'tanggal',
        'pemeriksa',
        'stamp',
        'paraf'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
