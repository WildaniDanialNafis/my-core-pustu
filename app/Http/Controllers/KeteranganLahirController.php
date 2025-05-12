<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\KeteranganLahir;

class KeteranganLahirController extends BaseCrudController
{
    protected string $model = KeteranganLahir::class;
    protected string $tableName = 'keterangan_lahir';
    protected string $foreignModel = Anak::class;
    protected string $foreignRelation = 'anak';
    protected array $foreignColumns = ['id_anak', 'nama'];

    protected array $validationRules = [
        'id_anak' => 'required|exists:anak,id_anak',
        'no' => 'nullable|string|max:255',
        'tanggal' => 'nullable|date',
        'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
        'jenis_kelahiran' => 'nullable|in:Tunggal,Kembar 2,Kembar 3,Lainnya',
        'keterangan_jenis_kelahiran' => 'nullable|string|max:255',
        'anak_ke' => 'nullable|integer|min:1',
        'usia_gestasi' => 'nullable|integer|min:0',
        'berat_lahir' => 'nullable|numeric|min:0',
        'panjang_badan' => 'nullable|numeric|min:0',
        'lingkar_kepala' => 'nullable|numeric|min:0',
        'di' => 'nullable|in:Rumah Sakit,Puskesmas,Rumah Bersalin,Praktik Mandiri Bidan,Lainnya',
        'keterangan_di' => 'nullable|string|max:255',
        'alamat_anak' => 'nullable|string',
        'diberi_nama' => 'nullable|string|max:255',
        'nama_ibu' => 'nullable|string|max:255',
        'umur' => 'nullable|integer|min:0',
        'nik_ibu' => 'nullable|string|max:255',
        'nama_ayah' => 'nullable|string|max:255',
        'nik_ayah' => 'nullable|string|max:255',
        'pekerjaan' => 'nullable|string|max:255',
        'alamat_ortu' => 'nullable|string',
        'kecamatan' => 'nullable|string|max:255',
        'kabupaten' => 'nullable|string|max:255',
        'tanggal_keterangan_lahir' => 'nullable|date',
        'paraf_saksi1' => 'nullable|string|max:255',
        'nama_saksi1' => 'nullable|string|max:255',
        'paraf_saksi2' => 'nullable|string|max:255',
        'nama_saksi2' => 'nullable|string|max:255',
        'paraf_penolong_persalinan' => 'nullable|string|max:255',
        'nama_penolong_persalinan' => 'nullable|string|max:255',
        'fasilitas_kesehatan' => 'nullable|string|max:255',
        'ttd' => 'nullable|string|max:255',
        'stempel' => 'nullable|string|max:255',
    ];
}
