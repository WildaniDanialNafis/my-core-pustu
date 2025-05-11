<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemantauanKia extends Model
{
    /** @use HasFactory<\Database\Factories\PemantauanKiaFactory> */
    use HasFactory;

    protected $table = 'pemantauan_kia';

    protected $primaryKey = 'id_pemantauan_kia';

    protected $fillable = [
        'id_anak',
        'id_vaksin',
        'hasil_pemantauan'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }

    public function ceklis()
    {
        return $this->belongsTo(Ceklis::class, 'id_ceklis');
    }
}
