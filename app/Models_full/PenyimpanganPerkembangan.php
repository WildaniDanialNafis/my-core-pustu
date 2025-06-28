<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyimpanganPerkembangan extends Model
{
    /** @use HasFactory<\Database\Factories\PenyimpanganPerkembanganFactory> */
    use HasFactory;

    protected $table = 'penyimpangan_perkembangan';

    protected $primaryKey = 'id_penyimpangan_perkembangan';

    protected $fillable = [
        'id_pelayanan_sdidtk',
        'kpsp',
        'tdd',
        'tdl'  
    ];

    public function pelayananSdidtk()
    {
        return $this->belongsTo(PelayananSdidtk::class,'id_pelayanan_sdidtk');
    }
}
