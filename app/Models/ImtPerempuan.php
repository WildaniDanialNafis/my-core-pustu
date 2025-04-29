<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImtPerempuan extends Model
{
    /** @use HasFactory<\Database\Factories\ImtPerempuanFactory> */
    use HasFactory;

    protected $table = 'imt_perempuan';

    protected $primaryKey = 'id_imt_perempuan';

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
