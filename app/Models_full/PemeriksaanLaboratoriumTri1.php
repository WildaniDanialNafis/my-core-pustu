<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanLaboratoriumTri1 extends Model
{
    /** @use HasFactory<\Database\Factories\PemeriksaanLaboratoriumTri1Factory> */
    use HasFactory;

    protected $table = 'pemeriksaan_laboratorium_tri1';

    protected $primaryKey = 'id_pemeriksaan_laboratorium_tri1';

    protected $fillable = [
        'id_pemeriksaan_trimester1',
        'tanggal',
        'hemoglobin',
        'tindak_hemoglobin',
        'goldar',
        'rhesus',
        'tindak_goldar_rhesus',
        'gula_darah_sewaktu',
        'tindak_gula_darah',
        'ppia',
        'tidak_ppia',
        'h',
        'tindak_h',
        's',
        'tindak_s',
        'hepatitis_b',
        'tindak_hepatitis_b',
        'lain_lain',
        'tindak_lain_lain'
    ];

    public function pemeriksaanTrimester1()
    {
        return $this->belongsTo(PemeriksaanTrimester1::class, 'id_pemeriksaan_trimester1');
    }
}
