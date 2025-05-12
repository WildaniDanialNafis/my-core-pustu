<?php

namespace App\Http\Controllers;

use App\Models\BayiLahir;
use App\Models\Ibu;

class BayiLahirController extends BaseCrudController
{
    protected $model = BayiLahir::class;
    protected $tableName = 'bayi_lahir';
    protected $foreignModel = Ibu::class;
    protected $foreignRelation = 'ibu';
    protected $foreignColumns = ['id_ibu', 'nama'];
    protected $validationRules = [
        'id_ibu' => 'required|exists:ibu,id_ibu',
        'anak_ke' => 'nullable|integer',
        'berat_lahir' => 'nullable|numeric',
        'panjang_badan' => 'nullable|numeric',
        'lingkar_kepala' => 'nullable|numeric',
        'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan,Tidak Bisa Ditentukan',
        'kondisi_bayi' => 'nullable|in:Segera menangis,Menangis beberapa saat,Tidak menangis,Seluruh tubuh kemerahan,Anggota gerak kebiruan,Seluruh tubuh biru,Kelainan bawaan,Meninggal',
        'keterangan_kondisi_bayi' => 'nullable|string',
        'asuhan_bayi' => 'nullable|in:Inisiasi menyusu dini (IMD) dalam 1 jam pertama kelahiran bayi,Suntikan vitamin K1,Salep mata antibiotika profilaksis,Imunisasi HB0',
        'keterangan_tambahan' => 'nullable|string',
    ];
}
