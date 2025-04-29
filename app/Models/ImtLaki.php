<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImtLaki extends Model
{
    /** @use HasFactory<\Database\Factories\ImtLakiFactory> */
    use HasFactory;

    protected $table = 'imt_laki';

    protected $primaryKey = 'id_imt_laki';

    protected $fillable = [
        'id_anak',
        'imt',
        'bulan',
        'tahun'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
