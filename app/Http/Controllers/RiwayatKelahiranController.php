<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\RiwayatKelahiran;

class RiwayatKelahiranController extends BaseCrudController
{
    protected $model = RiwayatKelahiran::class;
    protected $tableName = 'riwayat_kelahiran';
    protected $foreignModel = Anak::class;
    protected $foreignRelation = 'anak';
    protected $foreignColumns = ['id_anak', 'nama'];

    protected $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'g' => 'nullable|string|max:255',
        'p' => 'nullable|string|max:255',
        'a' => 'nullable|string|max:255',
        'tanggal_lahir' => 'nullable|date',
        'persalinan' => 'nullable|in:Spontan,Sungsang',
        'tindakan' => 'nullable|in:Ekstraksi Vakum,Ekstraksi Forsep,SC',
        'penolong_persalinan' => 'nullable|in:Dokter Spesialis,Dokter,Bidan',
        'cap_kaki_bayi' => 'nullable|string|max:255',
    ];
}
