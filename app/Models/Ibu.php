<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang sesuai dengan tabel di database
    protected $table = 'ibu';

    protected $primaryKey = 'id_ibu';

    protected $keyType = 'string';

    // Menentukan kolom mana yang bisa diisi secara massal (Mass Assignment)
    protected $fillable = [
        'id_user',
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
        'puskesmas_domisili',
        'no_reg_kohort_ibu',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function keluarga()
    {
        return $this->hasMany(Keluarga::class, 'id_ibu');
    }

    public function kesehatan1()
    {
        return $this->hasMany(Kesehatan1::class, 'id_ibu');
    }

    public function kesehatanBersalin() 
    {
        return $this->hasMany(KesehatanBersalin::class, 'id_ibu');
    }

    public function kesehatanNifas()
    {
        return $this->hasMany(KesehatanNifas::class, 'id_ibu');
    }

    public function kontrolTtd()
    {
        return $this->hasMany(KontrolTtd::class, 'id_ibu');
    }

    public function menyambutPersalinan()
    {
        return $this->hasMany(MenyambutPersalinan:: class, 'id_ibu');
    }

    public function pemeriksaanTrimester1()
    {
        return $this->hasMany(PemeriksaanTrimester1::class, 'id_ibu');
    }

    public function evaluasiKehamilan()
    {
        return $this->hasMany(EvaluasiKehamilan::class, 'id_ibu');
    }

    public function beratBadanBumil()
    {
        return $this->hasMany(BeratBadanBumil::class, 'id_ibu');
    }

    public function skringingPreeklampsia()
    {
        return $this->hasMany(SkriningPreeklampsia::class,'id_ibu');
    }

    public function pemeriksaanTrimester3()
    {
        return $this->hasMany(PemeriksaanTrimester3::class, 'id_ibu');
    }

    public function ringkasanKesehatan()
    {
        return $this->hasMany(RingkasanKesehatan::class,'id_ibu');
    }

    public function ibuBersalin()
    {
        return $this->hasMany(IbuBersalin::class,'id_ibu');
    }

    public function bayiLahir()
    {
        return $this->hasMany(BayiLahir::class,'id_ibu');
    }

    public function ringkasanNifas()
    {
        return $this->hasMany(RingkasanNifas::class, 'id_ibu');
    }

    public function ringkasanKesimpulanNifas()
    {
        return $this->hasMany(RingkasanKesimpulanNifas::class,'id_ibu');
    }

    public function rujukan()
    {
        return $this->hasMany(Rujukan::class, 'id_ibu');
    }
}
