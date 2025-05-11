<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinumTtd extends Model
{
    use HasFactory;

    protected $table = 'minum_ttd';

    protected $primaryKey = 'id_minum_ttd';

    protected $fillable = [
        'id_kontrol_ttd',
        'bulan_ke',
        'keterangan',
        'nama_bulan',
    ];

    public function kontrolTtd()
    {
        return $this->belongsTo(KontrolTtd::class, 'id_kontrol_ttd');
    }
}
