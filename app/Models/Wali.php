<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;

    protected $table = 'wali';

    protected $primaryKey = 'id_wali';

    protected $fillable = [
        'id_wali',
        'nama',
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
        'pendidikan',
        'pekerjaan',
        'provinsi',
        'kabupaten',
        'alamat',
        'telepon',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function anak()
    {
        return $this->hasMany(Anak::class, 'id_wali');
    }
}
