<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmanatDarah extends Model
{
    use HasFactory;

    protected $table = 'amanat_darah';

    protected $primaryKey = 'id_amanat_darah';

    protected $fillable = [
        'id_menyambut_persalinan',
        'nama',
        'hp'
    ];

    public function menyambutPersalinan()
    {
        return $this->belongsTo(MenyambutPersalinan::class, 'id_menyambut_persalinan');
    }
}
