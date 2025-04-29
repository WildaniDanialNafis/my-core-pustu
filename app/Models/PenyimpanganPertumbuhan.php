<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyimpanganPertumbuhan extends Model
{
    /** @use HasFactory<\Database\Factories\PenyimpanganPertumbuhanFactory> */
    use HasFactory;

    protected $table = 'penyimpangan_pertumbuhan';
    
    protected $primaryKey = 'id_penyimpangan_pertumbuhan';

    protected $fillable = [
        'id_pelayanan_sdidtk',
        'bb_u',
        'bb_tb',
        'tb_u',
        'lk_u'
    ];

    public function pelayananSdidtk()
    {
        return $this->belongsTo(PelayananSdidtk::class, 'id_pelayanan_sdidtk');
    }
}
