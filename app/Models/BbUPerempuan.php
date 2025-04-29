<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BbUPerempuan extends Model
{
    /** @use HasFactory<\Database\Factories\BbUPerempuanFactory> */
    use HasFactory;

    protected $table = 'bb_u_perempuan';

    protected $primaryKey = 'id_bb_u_perempuan';

    protected $fillable = [
        'id_anak',
        'bb',
        'bulan',
        'tahun'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
