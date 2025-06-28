<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RingkasanMtbs extends Model
{
    /** @use HasFactory<\Database\Factories\RingkasanMtbsFactory> */
    use HasFactory;

    protected $table = 'ringkasan_mtbs';

    protected $primaryKey = 'id_ringkasan_mtbs';

    protected $fillable = [
        'id_anak',
        'tanggal',
        'puskesmas',
        'catatan',
        'tanggal_kembali'
    ];

    public function anak() {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
