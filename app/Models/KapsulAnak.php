<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KapsulAnak extends Model
{
    /** @use HasFactory<\Database\Factories\KapsulAnakFactory> */
    use HasFactory;

    protected $table = 'kapsul_anak';

    protected $primaryKey = 'id_kapsul_anak';

    protected $fillable = [
        'id_anak',
        'id_umur_kapsul_anak',
        'kapsul',
        'februari',
        'agustus',
        'obat_cacing'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
    
    public function umurKapsulAnak()
    {
        return $this->belongsTo(UmurKapsulAnak::class,'id_umur_kapsul_anak');
    }
}
