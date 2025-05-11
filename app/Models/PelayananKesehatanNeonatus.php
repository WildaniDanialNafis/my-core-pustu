<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PelayananKesehatanNeonatus extends Model
{
    /** @use HasFactory<\Database\Factories\PelayananKesehatanNeonatusFactory> */
    use HasFactory;

    protected $table = 'pelayanan_kesehatan_neonatus';

    protected $primaryKey = 'id_pelayanan_kesehatan_neonatus';

    protected $fillable = [
        'id_anak',
        'catatan_penting',
        'nama_nakes'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }

    public function kn0()
    {
        return $this->hasMany(KN0::class,'id_pelayanan_kesehatan_neonatus');
    }

    public function kn1()
    {
        return $this->hasMany(KN1::class,'id_pelayanan_kesehatan_neonatus');
    }

    public function kn2()
    {
        return $this->HasMany(KN2::class,'id_pelayanan_kesehatan_neonatus');
    }

    public function kn3()
    {
        return $this->HasMany(KN3::class,'id_pelayanan_kesehatan_neonatus');
    }
}
