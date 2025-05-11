<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesehatan1 extends Model
{
    use HasFactory;

    protected $table = 'kesehatan1';

    protected $primaryKey = 'id_kesehatan1';

    protected $fillable = [
        'id_ibu',
        'hpht',
        'bb',
        'tb',
        'imt'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }

    public function kesehatan2()
    {
        return $this->hasMany(Kesehatan2::class, 'id_kesehatan1');
    }
}
