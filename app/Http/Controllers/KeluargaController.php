<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\Keluarga;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'keluarga';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $keluarga = new Keluarga();

        $foreignColumn = $keluarga->ibu()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'nama'];

        $foreignDatas = Ibu::all($columnDiambil);

        return view('admin.pages.keluarga', [
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
        $columns = Schema::getColumnListing('keluarga');

        $data = DataTables::of(Keluarga::query()->orderBy('id_keluarga', 'desc'))->make(true);

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
        // Validasi data
        $validated = $request->validate([
            'id_ibu' => 'required|exists:ibu,id_ibu', // Pastikan id_user ada di tabel users
            'nama' => 'nullable|string|max:255',
            'pembiayaan' => 'nullable|string|max:255',
            'no_jkn' => 'nullable|string|max:50',
            'faskes_tk_1' => 'nullable|string|max:255',
            'faskes_rujukan' => 'nullable|string|max:255',
            'gol_darah' => 'nullable|string|max:2',  // 2 karakter untuk gol_darah
            'tmpt_lahir' => 'nullable|string|max:100',
            'tgl_lahir' => 'nullable|date',
            'pendidikan' => 'nullable|string|max:100',
            'pekerjaan' => 'nullable|string|max:100',
            'provinsi' => 'nullable|string|max:100',
            'kabupaten' => 'nullable|string|max:100',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:20',
        ]);

        // Simpan data setelah validasi
        Keluarga::create($validated);

        // Redirect atau response sukses
        return redirect()->route('keluarga.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = Keluarga::findOrFail($id);
        $columns = Schema::getColumnListing('keluarga');
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
        // Validasi data
        $validated = $request->validate([
            'id_ibu' => 'required|exists:ibu,id_ibu', // Pastikan id_user ada di tabel users
            'nama' => 'nullable|string|max:255',
            'pembiayaan' => 'nullable|string|max:255',
            'no_jkn' => 'nullable|string|max:50',
            'faskes_tk_1' => 'nullable|string|max:255',
            'faskes_rujukan' => 'nullable|string|max:255',
            'gol_darah' => 'nullable|string|max:2',  // 2 karakter untuk gol_darah
            'tmpt_lahir' => 'nullable|string|max:100',
            'tgl_lahir' => 'nullable|date',
            'pendidikan' => 'nullable|string|max:100',
            'pekerjaan' => 'nullable|string|max:100',
            'provinsi' => 'nullable|string|max:100',
            'kabupaten' => 'nullable|string|max:100',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:20',
        ]);

        // Cari data Ibu berdasarkan ID
        $newData = Keluarga::findOrFail($id);  // Menemukan data berdasarkan ID atau gagal jika tidak ditemukan

        // Update data Ibu dengan data yang sudah divalidasi
        $newData->update($validated);

        // Redirect atau response sukses
        return redirect()->route('keluarga.index')->with('success', 'Data ibu berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = Keluarga::findOrFail($id);

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
