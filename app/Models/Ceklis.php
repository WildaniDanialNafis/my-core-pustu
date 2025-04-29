<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ceklis extends Model
{
    /** @use HasFactory<\Database\Factories\CeklisFactory> */
    use HasFactory;

    protected $table = 'ceklis';

    protected $primaryKey = 'id_ceklis';

    protected $fillable = [
        'ceklis'
    ];

    public function pemantauanKia()
    {
        return $this->hasMany(PemantauanKia::class, 'id_ceklis');
    }
}
