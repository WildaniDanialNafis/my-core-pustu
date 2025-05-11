<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmanatPenolongPersalinan extends Model
{
    use HasFactory;

    protected  $table = 'amanat_penolong_persalinan';

    protected $primaryKey = 'id_amanat_penolong_persalinan';

    protected $fillable = [
        'id_menyambut_persalinan',
        'penolong_persalinan',
        'nama',
    ];

    public function menyambutPersalinan()
    {
        return $this->belongsTo(MenyambutPersalinan::class, 'id_menyambut_persalinan');
    }
}
