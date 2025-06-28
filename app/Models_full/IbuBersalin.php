<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbuBersalin extends Model
{
    /** @use HasFactory<\Database\Factories\IbuBersalinFactory> */
    use HasFactory;

    protected $table = 'ibu_bersalin';

    protected $primaryKey = 'id_ibu_bersalin';

    protected $fillable = [
        'id_ibu',
        'tanggal_bersalin',
        'umur_kehamilan',
        'penolong_persalinan',
        'keterangan_penolong_persalinan',
        'cara_persalinan',
        'keterangan_cara_persalinan',
        'keadaan_ibu',
        'keterangan_keadaan_ibu',
        'kb_pasca_persalinan',
        'keterangan_tambahan'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }
}
