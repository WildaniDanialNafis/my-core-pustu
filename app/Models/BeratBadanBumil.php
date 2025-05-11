<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeratBadanBumil extends Model
{
    /** @use HasFactory<\Database\Factories\BeratBadanBumilFactory> */
    use HasFactory;

    protected $table = 'berat_badan_bumil';

    protected $primaryKey = 'id_berat_badan_bumil';

    protected $fillable = [
        'id_ibu',
        'minggu',
        'berat_badan'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }
}
