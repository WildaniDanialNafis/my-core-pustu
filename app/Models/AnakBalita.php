<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnakBalita extends Model
{
    /** @use HasFactory<\Database\Factories\AnakBalitaFactory> */
    use HasFactory;

    protected $table = 'anak_balita';

    protected $primaryKey = 'id_anak_balita';

    protected $fillable = [
        'id_anak',
        'tipe',
        'tanggal',
        'tempat',
        'bb',
        'pb',
        'lk',
        'perkembangan',
        'kie',
        'imunisasi',
        'vit_a',
        'obat_cacing',
        'ppia1',
        'ppia2',
        'ppia3'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
