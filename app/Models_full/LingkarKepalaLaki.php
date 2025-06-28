<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LingkarKepalaLaki extends Model
{
    /** @use HasFactory<\Database\Factories\LingkarKepalaLakiFactory> */
    use HasFactory;

    protected $table = 'lingkar_kepala_laki';

    protected $primaryKey = 'id_lingkar_kepala_laki';

    protected $fillable = [
        'id_anak',
        'lingkar_kepala',
        'bulan',
        'tahun'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
