<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelayananSdidtk extends Model
{
    /** @use HasFactory<\Database\Factories\PelayananSdidtkFactory> */
    use HasFactory;

    protected $table = 'pelayanan_sdidtk';

    protected $primaryKey = 'id_pelayanan_sdidtk';

    protected $fillable = [
        'id_anak',
        'id_umur_sdidtk',
        'tindakan',
        'kunjungan_ulang'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }

    public function umurSdidtk()
    {
        return $this->belongsTo(UmurSdidtk::class,'id_umur_sdidtk');
    }

    public function penyimpanganPertumbuhan()
    {
        return $this->hasMany(PenyimpanganPertumbuhan::class, 'id_pelayanan_sdidtk');
    }

    public function penyimpanganEmosional()
    {
        return $this->hasMany(PenyimpanganEmosional::class);
    }
}
