<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmanatKendaraan extends Model
{
    use HasFactory;

    protected $table = 'amanat_kendaraan';

    protected $primaryKey = 'id_amanat_kendaraan';

    protected $fillable = [
        'id_menyambut_persalinan',
        'kendaraan',
        'nama',
        'hp',
    ];

    public function menyambutPersalinan()
    {
        return $this->belongsTo(MenyambutPersalinan::class, 'id_menyambut_persalinan');
    }
}
