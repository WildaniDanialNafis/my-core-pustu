<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RingkasanKesimpulanNifas extends Model
{
    /** @use HasFactory<\Database\Factories\RingkasanKesimpulanNifasFactory> */
    use HasFactory;

    protected $table = 'ringkasan_kesimpulan_nifas';

    protected $primaryKey = 'id_ringkasan_kesimpulan_nifas';

    protected $fillable = [
        'id_ibu',
        'keadaan_ibu',
        'keadaan_bayi',
        'keterangan_keadaan_bayi',
        'komplikasi_nifas',
        'keterangan_komplikasi_nifas',
        'kesimpulan'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }
}
