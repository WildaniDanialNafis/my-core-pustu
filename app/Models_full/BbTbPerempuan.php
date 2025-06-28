<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BbTbPerempuan extends Model
{
    /** @use HasFactory<\Database\Factories\BbTbPerempuanFactory> */
    use HasFactory;

    protected $table = 'bb_tb_perempuan';

    protected $primaryKey = 'id_bb_tb_perempuan';

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
