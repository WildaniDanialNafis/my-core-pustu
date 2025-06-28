<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeteranganLahir extends Model
{
    /** @use HasFactory<\Database\Factories\KeteranganLahirFactory> */
    use HasFactory;

    protected $table = 'keterangan_lahir';

    protected $primaryKey = 'id_keterangan_lahir';

    protected $fillable = [
        'id_anak',
        'no',
        'tanggal',
        'jenis_kelamin',
        'jenis_kelahiran',
        'keterangan_jenis_kelahiran',
        'anak_ke',
        'usia_gestasi',
        'berat_lahir',
        'panjang_badan',
        'lingkar_kepala',
        'di',
        'keterangan_di',
        'alamat_anak',
        'diberi_nama',
        'nama_ibu',
        'umur',
        'nik_ibu',
        'nama_ayah',
        'nik_ayah',
        'pekerjaan',
        'alamat_ortu',
        'kecamatan',
        'kabupaten',
        'tanggal_keterangan_lahir',
        'paraf_saksi1',
        'nama_saksi1',
        'paraf_saksi2',
        'nama_saksi2',
        'paraf_penolong_persalinan',
        'nama_penolong_persalinan',
        'fasilitas_kesehatan',
        'ttd',
        'stempel'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }
}
