<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BbTbLaki extends Model
{
    /** @use HasFactory<\Database\Factories\BbTbLakiFactory> */
    use HasFactory;

    protected $table = 'bb_tb_laki';

    protected $primaryKey = 'id_bb_tb_laki';

    protected $fillable = [
        'id_anak',
        'bb',
        'tb'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
