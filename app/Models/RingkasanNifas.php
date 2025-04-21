<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RingkasanNifas extends Model
{
    /** @use HasFactory<\Database\Factories\RingkasanNifasFactory> */
    use HasFactory;

    protected $table = 'ringkasan_nifas';

    protected $primaryKey = 'id_ringkasan_nifas';

    protected $fillable = [
        'id_ibu',
        'kf',
        'tanggal',
        'faskes',
        'klasifikasi',
        'tindakan'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }
}
