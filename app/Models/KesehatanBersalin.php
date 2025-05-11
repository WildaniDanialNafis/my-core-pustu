<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesehatanBersalin extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_bersalin';

    protected $primaryKey = 'id_kesehatan_bersalin';

    protected $fillable = [
        'id_ibu',
        'taksiran_persalinan',
        'fasyankes',
        'rujukan',
        'inisiasi_menyusui_dini'
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'id_ibu');
    }
}
