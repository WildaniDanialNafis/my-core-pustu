<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $table = 'anak';

    protected $primaryKey = 'id_anak';

    protected $fillable = [
        'id_wali',
        'nama',
        'anak_ke',
        'no_akte_kelahiran',
        'nik',
        'tmpt_lahir',
        'tgl_lahir',
        'gol_darah',
        'jenis_pelayanan',
        'no_asuransi',
        'tgl_berlaku_asuransi',
        'fasilitas_pelayanan_kesehatan',
        'no_reg_kohort_bayi',
        'no_reg_kohort_balita',
        'no_catatan_medik_rs',
        'provinsi',
        'kabupaten',
        'alamat',
        'telepon',
    ];

    public function wali()
    {
        return $this->belongsTo(Wali::class, 'id_wali');
    }
}
