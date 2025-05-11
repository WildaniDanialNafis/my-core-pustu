<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreeklampsiaAnamnesis extends Model
{
    /** @use HasFactory<\Database\Factories\PreeklampsiaAnamnesisFactory> */
    use HasFactory;

    protected $table = 'preeklampsia_anamnesis';

    protected $primaryKey = 'id_preeklampsia_anamnesis';

    protected $fillable = [
        'id_skrining_preeklampsia',
        'id_kriteria_anamnesis',
        'risiko'
    ];

    public function skriningPreeklampsia()
    {
        return $this->belongsTo(SkriningPreeklampsia::class, 'id_skrining_preeklampsia');
    }

    public function kriteriaAnamnesis()
    {
        return $this->belongsTo(KriteriaAnamnesis::class,'id_kriteria_anamnesis');
    }
}
