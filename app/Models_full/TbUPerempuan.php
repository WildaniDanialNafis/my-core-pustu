<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbUPerempuan extends Model
{
    /** @use HasFactory<\Database\Factories\TbUPerempuanFactory> */
    use HasFactory;

    protected $table = 'tb_u_perempuan';

    protected $primaryKey = 'id_tb_u_perempuan';

    protected $fillable = [
        'id_anak',
        'tb',
        'bulan',
        'tahun'
    ];
    
    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
