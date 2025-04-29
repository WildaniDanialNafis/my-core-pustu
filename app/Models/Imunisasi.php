<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    /** @use HasFactory<\Database\Factories\ImunisasiFactory> */
    use HasFactory;

    protected $table = 'imunisasi';

    protected $primaryKey = 'id_imunisasi';

    protected $fillable = [
        'id_anak',
        'id_vaksin',
        'tanggal',
        'paraf'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }

    public function vaksin()
    {
        return $this->belongsTo(Vaksin::class,'id_vaksin');
    }
}
