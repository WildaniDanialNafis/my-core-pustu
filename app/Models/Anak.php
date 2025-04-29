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

    public function bayiBaruLahir()
    {
        return $this->hasMany(BayiBaruLahir::class, 'id_anak');
    }

    public function bayi()
    {
        return $this->hasMany(Bayi::class, 'id_anak');
    }

    public function anakBalita()
    {
        return $this->hasMany(AnakBalita::class,'id_anak');
    }

    public function keteranganLahir()
    {
        return $this->hasMany(KeteranganLahir::class,'id_keterangan_lahir');
    }

    public function riwayatKelahiran()
    {
        return $this->hasMany(RiwayatKelahiran::class, 'id_anak');
    }

    public function pelayananKesehatanNeonatus()
    {
        return $this->hasMany(PelayananKesehatanNeonatus::class,'id_anak');
    }

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class,'id_anak');
    }

    public function pemantauanKia()
    {
        return $this->hasMany(PemantauanKia::class, 'id_anak');
    }

    public function pelayananSdidtk()
    {
        return $this->hasMany(PelayananSdidtk::class,'id_anak');
    }

    public function nasihatAnak()
    {
        return $this->hasMany(NasihatAnak::class, 'id_anak');
    }

    public function kapsulAnak()
    {
        return $this->hasMany(KapsulAnak::class, 'id_anak');
    }

    public function kmsPerempuan()
    {
        return $this->hasMany(KmsPerempuan::class,'id_anak');
    }

    public function bbUPerempuan()
    {
        return $this->hasMany(BbUPerempuan::class,'id_anak');
    }

    public function tbUPerempuan()
    {
        return $this->hasMany(TbUPerempuan::class, 'id_anak');
    }

    public function bbTbPerempuan()
    {
        return $this->hasMany(BbTbPerempuan::class,'id_anak');
    }

    public function lingkarKepalaPerempuan()
    {
        return $this->hasMany(LingkarKepalaPerempuan::class,'id_anak');
    }

    public function kmsLaki()
    {
        return $this->hasMany(KmsLaki::class,'id_anak');
    }

    public function bbULaki()
    {
        return $this->hasMany(BbULaki::class,'id_anak');
    }

    public function tbULaki()
    {
        return $this->hasMany(TbULaki::class,'id_anak');
    }

    public function bbTbLaki()
    {
        return $this->hasMany(BbTbLaki::class,'id_anak');
    }

    public function lingkarKepalaLaki()
    {
        return $this->hasMany(LingkarKepalaLaki::class,'id_anak');
    }

    public function imtPerempuan()
    {
        return $this->hasMany(ImtPerempuan::class,'id_anak');
    }

    public function imtLaki()
    {
        return $this->hasMany(ImtLaki::class,'id_anak');
    }

    public function kesehatanGigi()
    {
        return $this->hasMany(KesehatanGigi::class,'id_anak');
    }

    public function ringkasanMtbs()
    {
        return $this->hasMany(RingkasanMtbs::class,'id_anak');
    }

    public function ringkasanPelayananDokter()
    {
        return $this->hasMany(RingkasanPelayananDokter::class, 'id_anak');
    }

    public function rujukanAnak()
    {
        return $this->hasMany(RujukanAnak::class,'id_anak');
    }
}
