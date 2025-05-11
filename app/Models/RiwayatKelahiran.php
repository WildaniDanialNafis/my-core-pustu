<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKelahiran extends Model
{
    /** @use HasFactory<\Database\Factories\RiwayatKelahiranFactory> */
    use HasFactory;

    protected $table = 'riwayat_kelahiran';

    protected $primaryKey = 'id_riwayat_kelahiran';

    protected $fillable = [
        'id_anak',
        'g',
        'p',
        'a',
        'tanggal_lahir',
        'persalinan',
        'tindakan',
        'penolong_persalinan',
        'cap_kaki_bayi'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
