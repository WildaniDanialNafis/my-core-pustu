<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiKehamilan;
use App\Models\Ibu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class EvaluasiKehamilanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'evaluasi_kehamilan';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new EvaluasiKehamilan();

        $foreignColumn = $kesehatan->ibu()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'nama'];

        $foreignDatas = Ibu::all($columnDiambil);

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
        $columns = Schema::getColumnListing('evaluasi_kehamilan');

        $data = DataTables::of(EvaluasiKehamilan::query()->orderBy('id_evaluasi_kehamilan', 'desc'))->make(true);

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
            'id_ibu' => 'required|exists:ibu,id_ibu',
            'pemeriksa' => 'nullable|string|max:255',
            'tanggal' => 'nullable|date',
            'usia_gestasi' => 'nullable|integer|min:1|max:42',
            'denyut_jantung_janin' => 'nullable|integer|min:80|max:200',
            'sistolik' => 'nullable|integer|min:70|max:200',
            'diastolik' => 'nullable|integer|min:40|max:130',
            'gerakan_bayi' => 'nullable|integer|min:0|max:50',
            'urin_protein' => 'nullable|integer|min:0|max:10',
            'urin_reduksi' => 'nullable|integer|min:0|max:10',
            'hemoglobin' => 'nullable|integer|min:5|max:20',
            'kalsium' => 'nullable|integer|min:0|max:1',
            'aspirin' => 'nullable|integer|min:0|max:1', 
        ]);

        EvaluasiKehamilan::create($validated);

        return redirect()->route('evaluasi-kehamilan.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = EvaluasiKehamilan::findOrFail($id);
        $columns = Schema::getColumnListing('evaluasi_kehamilan');
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
            'id_ibu' => 'required|exists:ibu,id_ibu',
            'pemeriksa' => 'nullable|string|max:255',
            'tanggal' => 'nullable|date',
            'usia_gestasi' => 'nullable|integer|min:1|max:42',
            'denyut_jantung_janin' => 'nullable|integer|min:80|max:200',
            'sistolik' => 'nullable|integer|min:70|max:200',
            'diastolik' => 'nullable|integer|min:40|max:130',
            'gerakan_bayi' => 'nullable|integer|min:0|max:50',
            'urin_protein' => 'nullable|integer|min:0|max:10',
            'urin_reduksi' => 'nullable|integer|min:0|max:10',
            'hemoglobin' => 'nullable|integer|min:5|max:20',
            'kalsium' => 'nullable|integer|min:0|max:1',
            'aspirin' => 'nullable|integer|min:0|max:1',
        ]);

        $newData = EvaluasiKehamilan::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('evaluasi-kehamilan.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = EvaluasiKehamilan::findOrFail($id);

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
