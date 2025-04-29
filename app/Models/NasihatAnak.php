<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NasihatAnak extends Model
{
    /** @use HasFactory<\Database\Factories\NasihatAnakFactory> */
    use HasFactory;

    protected $table = 'nasihat_anak';

    protected $primaryKey = 'id_nasihat_anak';

    protected $fillable = [
        'id_anak',
        'id_umur_nasihat_anak',
        'nasihat',
        'tanggal'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }

    public function umurNasihatAnak()
    {
        return $this->belongsTo(UmurNasihatAnak::class,'id_anak');
    }
}
