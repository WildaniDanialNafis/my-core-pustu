<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiKesehatanBumil extends Model
{
    use HasFactory;

    protected $table = 'evaluasi_kesehatan_bumil';

    protected $primaryKey = 'id_evaluasi_kesehatan_bumil';

    protected $fillable = [
        'id_ibu',
        'nama_dokter',
        'faskes'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }

    public function kondisiKesehatanBumil()
    {
        return $this->hasMany(KondisiKesehatanBumil::class, 'id_evaluasi_ksehatan_bumil');
    }

    public function imunisasiT()
    {
        return $this->hasMany(ImunisasiT::class,'id_evaluasi_kesehatan_bumil');
    }

    public function riwayatKesehatanBumil()
    {
        return $this->hasMany(RiwayatKesehatanBumil::class, 'id_evaluasi_kesehatan_bumil');
    }

    public function riwayatPerilakuBerisiko()
    {
        return $this->hasMany(RiwayatPerilakuBerisiko::class,'id_evaluasi_kesehatan_bumil');
    }

    public function riwayatKehamilan()
    {
        return $this->hasMany(RiwayatKehamilan::class,'id_evaluasi_kehamilan');
    }

    public function riwayatPenyakitKeluarga()
    {
        return $this->hasMany(RiwayatPenyakitKeluarga::class,'id_evaluasi_kesehatan_keluarga');
    }

    public function pemeriksaanKhusus()
    {
        return $this->hasMany(PemeriksaanKhusus::class, 'id_evaluasi_kesehatan_bumil');
    }
}
