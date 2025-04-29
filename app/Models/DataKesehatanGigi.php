<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKesehatanGigi extends Model
{
    /** @use HasFactory<\Database\Factories\DataKesehatanGigiFactory> */
    use HasFactory;

    protected $table = 'data_kesehatan_gigi';

    protected $primaryKey = 'id_data_kesehatan_gigi';

    protected $fillable = [
        'id_kesehatan_gigi',
        'pemeriksaan',
        'jumlah_gigi',
        'jumlah_gigi_berlubang',
        'plak',
        'risiko_gigi_berlubang'
    ];

    public function kesehatanGigi()
    {
        return $this->belongsTo(KesehatanGigi::class, 'id_kesehatan_gigi');
    }
}
