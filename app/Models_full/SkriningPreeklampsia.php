<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkriningPreeklampsia extends Model
{
    /** @use HasFactory<\Database\Factories\SkriningPreeklampsiaFactory> */
    use HasFactory;

    protected $table = 'skrining_preeklampsia';

    protected $primaryKey = 'id_skrining_preeklampsia';

    protected $fillable = [
        'id_ibu',
        'kesimpulan',
        'paraf_dokter',
        'nama_dokter'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }

    public function preeklampsiaAnamnesis()
    {
        return $this->hasMany(PreeklampsiaAnamnesis::class,'id_skrining_preeklampsia');
    }

    public function preeklampsiaFisik()
    {
        return $this->hasMany(PreeklampsiaFisik::class,'id_skrining_preeklampsia');
    }
}
