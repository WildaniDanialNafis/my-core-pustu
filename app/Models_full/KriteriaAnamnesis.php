<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaAnamnesis extends Model
{
    /** @use HasFactory<\Database\Factories\KriteriaAnamnesisFactory> */
    use HasFactory;

    protected $table = 'kriteria_anamnesis';

    protected $primaryKey = 'id_kriteria_anamnesis';

    protected $fillable = [
        'kriteria_anamnesis'
    ];

    public function preeklampsiaAnamnesis()
    {
        return $this->hasMany(PreeklampsiaAnamnesis::class, 'id_kriteria_anamnesis');
    }
}
