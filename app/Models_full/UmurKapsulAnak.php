<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmurKapsulAnak extends Model
{
    /** @use HasFactory<\Database\Factories\UmurKapsulAnakFactory> */
    use HasFactory;

    protected $table = 'umur_kapsul_anak';

    protected $primaryKey = 'id_umur_kapsul_anak';

    protected $fillable = [
        'umur'
    ];

    public function kapsulAnak()
    {
        return $this->hasMany(KapsulAnak::class, 'id_umur_kapsul_anak');
    }
}
