<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesehatanGigi extends Model
{
    /** @use HasFactory<\Database\Factories\KesehatanGigiFactory> */
    use HasFactory;

    protected $table = 'kesehatan_gigi';

    protected $primaryKey = 'id_kesehatan_gigi';

    protected $fillable = [
        'id_anak',
        'nama',
        'umur'
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak');
    }

    public function dataKesehatanGigi()
    {
        return $this->hasMany(DataKesehatanGigi::class, 'id_kesehatan_gigi');
    }
}
