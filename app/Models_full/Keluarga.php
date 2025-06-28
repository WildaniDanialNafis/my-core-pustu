<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $table = 'keluarga';

    protected $primaryKey = 'id_keluarga';

    protected $fillable = [
        'id_ibu',
        'nama',
        'pembiayaan',
        'no_jkn',
        'faskes_tk_1',
        'faskes_rujukan',
        'gol_darah',
        'tmpt_lahir',
        'tgl_lahir',
        'pendidikan',
        'pekerjaan',
        'provinsi',
        'kabupaten',
        'alamat',
        'telepon',
        // 'puskesmas_domisili',
        // 'no_reg_kohort_ibu',
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }
}
