<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BbULaki extends Model
{
    /** @use HasFactory<\Database\Factories\BbULakiFactory> */
    use HasFactory;

    protected $table = 'bb_u_laki';

    protected $primaryKey = 'id_bb_u_laki';

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
