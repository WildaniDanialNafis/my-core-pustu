<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyimpanganEmosional extends Model
{
    /** @use HasFactory<\Database\Factories\PenyimpanganEmosionalFactory> */
    use HasFactory;

    protected $table = 'penyimpangan_emosional';
    
    protected $primaryKey = 'id_penyimpangan_emosional';

    protected $fillable = [
        'id_pelayanan_sdidtk',
        'kmpe',
        'm_chat',
        'gpph'
    ];

    public function pelayananSdidtk()
    {
        return $this->belongsTo(PelayananSdidtk::class,'id_pelayanan_sdidtk');
    }
}
