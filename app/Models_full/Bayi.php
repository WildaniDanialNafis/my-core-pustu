<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    /** @use HasFactory<\Database\Factories\BayiFactory> */
    use HasFactory;

    protected $table = 'bayi';

    protected $primaryKey = 'id_bayi';

    protected $fillable = [
        'id_anak',
        'tanggal',
        'tempat',
        'bb',
        'pb',
        'lk',
        'perkembangan',
        'kie',
        'imunisasi',
        'vit_a',
        'ppia1',
        'ppia2',
        'ppia3'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
