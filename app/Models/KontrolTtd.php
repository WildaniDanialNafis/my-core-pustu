<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontrolTtd extends Model
{
    use HasFactory;

    protected $table = 'kontrol_ttd';

    protected $primaryKey = 'id_kontrol_ttd';

    protected $fillable = [
        'id_ibu',
        'nama_pengontrol',
        'hubungan'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }

    public function minumTtd()
    {
        return $this->hasMany(MinumTtd::class, 'id_kontrol_ttd');
    }
}
