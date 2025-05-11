<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    /** @use HasFactory<\Database\Factories\JenisVaksinFactory> */
    use HasFactory;

    protected $table = 'vaksin';

    protected $primaryKey = 'id_vaksin';

    protected $fillable = [
        'vaksin'
    ];

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class, 'id_imunisasi');
    }
}
