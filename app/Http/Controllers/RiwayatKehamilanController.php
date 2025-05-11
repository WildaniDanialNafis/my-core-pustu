<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\RiwayatKehamilan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class RiwayatKehamilanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'riwayat_kehamilan';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new RiwayatKehamilan();

        $foreignColumn = $kesehatan->evaluasiKesehatanBumil()->getForeignKeyName(); 

        $columnDiambil = [$foreignColumn, 'faskes'];

        $foreignDatas = EvaluasiKesehatanBumil::all($columnDiambil);

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
        $columns = Schema::getColumnListing('riwayat_kehamilan');

        $data = DataTables::of(RiwayatKehamilan::query()->orderBy('id_riwayat_kehamilan', 'desc'))->make(true);

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
            'id_evaluasi_kesehatan_bumil' => 'required|integer|exists:evaluasi_kesehatan_bumil,id_evaluasi_kesehatan_bumil',
            'tahun' => 'nullable|date',
            'berat_lahir' => 'nullable|numeric',
            'persalinan' => 'nullable|string|max:255',
            'penolong_persalinan' => 'nullable|string|max:255',
            'komplikasi' => 'nullable|string|max:255',
        ]);

        RiwayatKehamilan::create($validated);

        return redirect()->route('riwayat-kehamilan.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = RiwayatKehamilan::findOrFail($id);
        $columns = Schema::getColumnListing('riwayat_kehamilan');
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
            'id_evaluasi_kesehatan_bumil' => 'required|integer|exists:evaluasi_kesehatan_bumil,id_evaluasi_kesehatan_bumil',
            'tahun' => 'nullable|date',
            'berat_lahir' => 'nullable|numeric',
            'persalinan' => 'nullable|string|max:255',
            'penolong_persalinan' => 'nullable|string|max:255',
            'komplikasi' => 'nullable|string|max:255',
        ]);

        $newData = RiwayatKehamilan::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('riwayat-kehamilan.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = RiwayatKehamilan::findOrFail($id);

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
