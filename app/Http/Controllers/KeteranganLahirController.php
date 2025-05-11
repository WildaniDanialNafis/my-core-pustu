<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\KeteranganLahir;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class KeteranganLahirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'keterangan_lahir';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new KeteranganLahir();

        $foreignColumn = $kesehatan->anak()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'nama'];

        $foreignDatas = Anak::all($columnDiambil);

        return view('admin.pages.template-table', [
            'table' => $table,
            'columns' => $columns,
            'columnTypes' => $columnTypes,
            'foreignDatas' => $foreignDatas,
            'foreignColumn' => $foreignColumn,
            'columnDiambil' => $columnDiambil
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $columns = Schema::getColumnListing('keterangan_lahir');

        $data = DataTables::of(KeteranganLahir::query()->orderBy('id_keterangan_lahir', 'desc'))->make(true);

        return response()->json([
            'columns' => $columns,
            'data' => $data->getData()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
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
        ]);

        KeteranganLahir::create($validated);

        return redirect()->route('keterangan-lahir.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = KeteranganLahir::findOrFail($id);
        $columns = Schema::getColumnListing('keterangan_lahir');
        return response()->json([
            'data' => $data,
            'columns' => $columns
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
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
        ]);

        $newData = KeteranganLahir::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('keterangan-lahir.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = KeteranganLahir::findOrFail($id);

            $data->delete();

            return response()->json(['success' => 'Keluarga berhasil dihapus!']);
        } catch (Exception $e) {
            Log::error('Error saat menghapus Keluarga:', [
                'error' => $e->getMessage(),
                'id' => $id
            ]);

            return response()->json([
                'error' => 'Terjadi kesalahan saat menghapus data Keluarga.',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
