<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenyambutPersalinan extends Model
{
    use HasFactory;

    protected $table = 'menyambut_persalinan';

    protected $primaryKey = 'id_menyambut_persalinan';

    protected $fillable = [
        'id_ibu',
        'nama_pembuat',
        'alamat',
        'perkiraan_bulan_lahir',
        'perkiraan_tahun_lahir',
        'dana_persalinan',
        'dibantu_oleh',
        'metode_kontrasepsi',
        'golongan_darah',
        'rhesus',
        'bersedia_dirujuk',
        'tanggal',
        'persetujuan',
        'paraf_persetujuan',
        'nama_persetujuan',
        'paraf_bumil',
        'nama_bumil',
        'nakes',
        'paraf_nakes',
        'nama_nakes'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }

    public function amanatPenolongPersalinan()
    {
        return $this->hasMany(AmanatPenolongPersalinan::class,'id_penolong_persalinan');
    }

    public function amanatKendaraan()
    {
        return $this->hasMany(AmanatKendaraan::class,'id_menyambut_persalinan');
    }

    public function amanatDarah()
    {
        return $this->hasMany(AmanatDarah::class, 'id_menyambut_persalinan');
    }
}
