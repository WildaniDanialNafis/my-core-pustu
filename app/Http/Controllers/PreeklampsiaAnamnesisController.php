<?php

namespace App\Http\Controllers;

use App\Models\PreeklampsiaAnamnesis;
use App\Models\SkriningPreeklampsia;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class PreeklampsiaAnamnesisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'preeklampsia_anamnesis';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new PreeklampsiaAnamnesis();

        $foreignColumn = $kesehatan->skriningPreeklampsia()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'nama_dokter'];

        $foreignDatas = SkriningPreeklampsia::all($columnDiambil);

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
        $columns = Schema::getColumnListing('preeklampsia_anamnesis');

        $data = DataTables::of(PreeklampsiaAnamnesis::query()->orderBy('id_preeklampsia_anamnesis', 'desc'))->make(true);

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
            'id_skrining_preeklampsia' => 'required|exists:skrining_preeklampsia,id_skrining_preeklampsia',
            'id_kriteria_anamnesis' => 'required|integer|between:1,14',
            'risiko' => 'nullable|in:,Risiko sedang,Risiko tinggi', 
        ]);

        PreeklampsiaAnamnesis::create($validated);

        return redirect()->route('preeklampsia-anamnesis.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = PreeklampsiaAnamnesis::findOrFail($id);
        $columns = Schema::getColumnListing('preeklampsia_anamnesis');
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
            'id_skrining_preeklampsia' => 'required|exists:skrining_preeklampsia,id_skrining_preeklampsia',
            'id_kriteria_anamnesis' => 'required|integer|between:1,14',
            'risiko' => 'nullable|in:,Risiko sedang,Risiko tinggi', 
        ]);

        $newData = PreeklampsiaAnamnesis::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('preeklampsia-anamnesis.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = PreeklampsiaAnamnesis::findOrFail($id);

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
