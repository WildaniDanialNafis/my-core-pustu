<?php

namespace App\Http\Controllers;

use App\Models\AmanatPenolongPersalinan;
use App\Models\MenyambutPersalinan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class AmanatPenolongPersalinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'amanat_penolong_persalinan';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new AmanatPenolongPersalinan();

        $foreignColumn = $kesehatan->menyambutPersalinan()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'nama_pembuat'];

        $foreignDatas = MenyambutPersalinan::all($columnDiambil);

        // $table = str_replace('_', '-', $table);

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
        $columns = Schema::getColumnListing('amanat_penolong_persalinan');

        $data = DataTables::of(AmanatPenolongPersalinan::query()->orderBy('id_amanat_penolong_persalinan', 'desc'))->make(true);

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
            'id_menyambut_persalinan' => 'required|exists:menyambut_persalinan,id_menyambut_persalinan',
            'penolong_persalinan' => 'nullable|in:Dokter,Bidan',
            'nama' => 'nullable|string|max:255',
        ]);

        AmanatPenolongPersalinan::create($validated);

        return redirect()->route('amanat-penolong-persalinan.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = AmanatPenolongPersalinan::findOrFail($id);
        $columns = Schema::getColumnListing('amanat_penolong_persalinan');
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
            'id_menyambut_persalinan' => 'required|exists:menyambut_persalinan,id_menyambut_persalinan',
            'penolong_persalinan' => 'nullable|in:Dokter,Bidan',
            'nama' => 'nullable|string|max:255',          
        ]);

        $newData = AmanatPenolongPersalinan::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('amanat-penolong-persalinan.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = AmanatPenolongPersalinan::findOrFail($id);

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
