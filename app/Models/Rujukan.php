<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model
{
    /** @use HasFactory<\Database\Factories\RujukanFactory> */
    use HasFactory;

    protected $table = 'rujukan';

    protected $primaryKey = 'id_rujukan';

    protected $fillable = [
        'id_ibu',
        'rujukan',
        'tanggal_umpan_balik',
        'diagnosis_akhir_balik',
        'resume_umpan_balik',
        'anjuran'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }
}
