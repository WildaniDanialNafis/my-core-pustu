<?php

namespace App\Http\Controllers;

use App\Models\PelayananSdidtk;
use App\Models\PenyimpanganEmosional;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class PenyimpanganEmosionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'penyimpangan_emosional';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new PenyimpanganEmosional();

        $foreignColumn = $kesehatan->pelayananSdidtk()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'id_pelayanan_sdidtk'];

        $foreignDatas = PelayananSdidtk::all($columnDiambil);

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
        $columns = Schema::getColumnListing('penyimpangan_emosional');

        $data = DataTables::of(PenyimpanganEmosional::query()->orderBy('id_penyimpangan_emosional', 'desc'))->make(true);

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
            'id_pelayanan_sdidtk' => 'required|exists:pelayanan_sdidtk,id_pelayanan_sdidtk',
            'kmpe' => 'nullable|in:N,R',
            'm_chat' => 'nullable|in:N,R',
            'gpph' => 'nullable|in:N,R',
        ]);

        PenyimpanganEmosional::create($validated);

        return redirect()->route('penyimpangan-emosional.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = PenyimpanganEmosional::findOrFail($id);
        $columns = Schema::getColumnListing('penyimpangan_emosional');
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
            'id_pelayanan_sdidtk' => 'required|exists:pelayanan_sdidtk,id_pelayanan_sdidtk',
            'kmpe' => 'nullable|in:N,R',
            'm_chat' => 'nullable|in:N,R',
            'gpph' => 'nullable|in:N,R',
        ]);

        $newData = PenyimpanganEmosional::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('penyimpangan-emosional.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = PenyimpanganEmosional::findOrFail($id);

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
