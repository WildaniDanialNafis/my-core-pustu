<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmurSdidtk extends Model
{
    /** @use HasFactory<\Database\Factories\UmurSdidtkFactory> */
    use HasFactory;

    protected $table = 'umur_sdidtk';

    protected $primaryKey = 'id_umur_sdidtk';

    protected $fillable = [
        'umur'
    ];

    public function pelayananSdidtk()
    {
        return $this->hasMany(PelayananSdidtk::class, 'id_umur_sdidtk');
    }
}
