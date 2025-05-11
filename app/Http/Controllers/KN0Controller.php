<?php

namespace App\Http\Controllers;

use App\Models\KN0;
use App\Models\PelayananKesehatanNeonatus;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class KN0Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'kn0';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new KN0();

        $foreignColumn = $kesehatan->pelayananKesehatanNeonatus()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'id_pelayanan_kesehatan_neonatus'];

        $foreignDatas = PelayananKesehatanNeonatus::all($columnDiambil);

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
        $columns = Schema::getColumnListing('kn0');

        $data = DataTables::of(KN0::query()->orderBy('id_kn0', 'desc'))->make(true);

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
            'id_pelayanan_kesehatan_neonatus' => ['required', 'exists:pelayanan_kesehatan_neonatus,id_pelayanan_kesehatan_neonatus'],
            'kondisi' => ['nullable', 'string', 'max:255'],
            'bb' => ['nullable', 'numeric'],
            'pb' => ['nullable', 'numeric'],
            'lk' => ['nullable', 'numeric'],
            'imd' => ['nullable', 'in:Ya,Tidak'],
            'vit_k1' => ['nullable', 'in:Ya,Tidak'],
            'salep' => ['nullable', 'in:Ya,Tidak'],
            'tetes_mata' => ['nullable', 'in:Ya,Tidak'],
            'imunisasi_hb' => ['nullable', 'in:Ya,Tidak'],
            'tanggal' => ['nullable', 'date'],
            'nomor_batch' => ['nullable', 'string', 'max:255'],
            'masalah' => ['nullable', 'string'],
            'dirujuk_ke' => ['nullable', 'string'],
            'nama_jelas_petugas' => ['nullable', 'string', 'max:255'],
        ]);

        KN0::create($validated);

        return redirect()->route('kn0.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = KN0::findOrFail($id);
        $columns = Schema::getColumnListing('kn0');
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
            'id_pelayanan_kesehatan_neonatus' => ['required', 'exists:pelayanan_kesehatan_neonatus,id_pelayanan_kesehatan_neonatus'],
            'kondisi' => ['nullable', 'string', 'max:255'],
            'bb' => ['nullable', 'numeric'],
            'pb' => ['nullable', 'numeric'],
            'lk' => ['nullable', 'numeric'],
            'imd' => ['nullable', 'in:Ya,Tidak'],
            'vit_k1' => ['nullable', 'in:Ya,Tidak'],
            'salep' => ['nullable', 'in:Ya,Tidak'],
            'tetes_mata' => ['nullable', 'in:Ya,Tidak'],
            'imunisasi_hb' => ['nullable', 'in:Ya,Tidak'],
            'tanggal' => ['nullable', 'date'],
            'nomor_batch' => ['nullable', 'string', 'max:255'],
            'masalah' => ['nullable', 'string'],
            'dirujuk_ke' => ['nullable', 'string'],
            'nama_jelas_petugas' => ['nullable', 'string', 'max:255'],
        ]);

        $newData = KN0::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('kn0.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = KN0::findOrFail($id);

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
