<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmurNasihatAnak extends Model
{
    /** @use HasFactory<\Database\Factories\UmurNasihatAnakFactory> */
    use HasFactory;

    protected $table = 'umur_nasihat_anak';

    protected $primaryKey = 'id_umur_nasihat_anak';

    protected $fillable = [
        'umur'
    ];

    public function nasihatAnak()
    {
        return $this->hasMany(NasihatAnak::class, 'id_umur_nasihat_anak');
    }
}
