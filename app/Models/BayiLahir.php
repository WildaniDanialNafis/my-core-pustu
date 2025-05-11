<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BayiLahir extends Model
{
    /** @use HasFactory<\Database\Factories\BayiLahirFactory> */
    use HasFactory;

    protected $table = 'bayi_lahir';

    protected $primaryKey = 'id_bayi_lahir';

    protected $fillable = [
        'id_ibu',
        'anak_ke',
        'berat_lahir',
        'panjang_badan',
        'lingkar_badan',
        'jenis_kelamin',
        'kondisi_bayi',
        'keterangan_kondisi_bayi',
        'asuhan_bayi',
        'keterangan_tambahan'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }
}
