<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanLaboratoriumTri1;
use App\Models\PemeriksaanTrimester1;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class PemeriksaanLaboratoriumTri1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'pemeriksaan_laboratorium_tri1';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new PemeriksaanLaboratoriumTri1();

        $foreignColumn = $kesehatan->pemeriksaanTrimester1()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'id_pemeriksaan_trimester1'];

        $foreignDatas = PemeriksaanTrimester1::all($columnDiambil);

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
        $columns = Schema::getColumnListing('pemeriksaan_laboratorium_tri1');

        $data = DataTables::of(PemeriksaanLaboratoriumTri1::query()->orderBy('id_pemeriksaan_laboratorium_tri1', 'desc'))->make(true);

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
            'id_pemeriksaan_trimester1' => 'required|exists:pemeriksaan_trimester1,id_pemeriksaan_trimester1',
            'tanggal' => 'nullable|date',
            'hemoglobin' => 'nullable|numeric|min:0',
            'tindak_hemoglobin' => 'nullable|string',
            'goldar' => 'nullable|string|max:10',
            'rhesus' => 'nullable|string|max:10',
            'tindak_goldar_rhesus' => 'nullable|string',
            'gula_darah_sewaktu' => 'nullable|numeric|min:0',
            'tindak_gula_darah' => 'nullable|string',
            'ppia' => 'nullable|string|max:255',
            'tindak_ppia' => 'nullable|string',
            'h' => 'nullable|in:R,NR',
            'tindak_h' => 'nullable|string',
            's' => 'nullable|in:R,NR',
            'tindak_s' => 'nullable|string',
            'hepatitis_b' => 'nullable|in:R,NR',
            'tindak_hepatitis_b' => 'nullable|string',
            'lain_lain' => 'nullable|string',
            'tindak_lain_lain' => 'nullable|string',
 
        ]);

        PemeriksaanLaboratoriumTri1::create($validated);

        return redirect()->route('pemeriksaan-laboratorium-tri1.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = PemeriksaanLaboratoriumTri1::findOrFail($id);
        $columns = Schema::getColumnListing('pemeriksaan_laboratorium_tri1');
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
            'id_pemeriksaan_trimester1' => 'required|exists:pemeriksaan_trimester1,id_pemeriksaan_trimester1',
            'tanggal' => 'nullable|date',
            'hemoglobin' => 'nullable|numeric|min:0',
            'tindak_hemoglobin' => 'nullable|string',
            'goldar' => 'nullable|string|max:10',
            'rhesus' => 'nullable|string|max:10',
            'tindak_goldar_rhesus' => 'nullable|string',
            'gula_darah_sewaktu' => 'nullable|numeric|min:0',
            'tindak_gula_darah' => 'nullable|string',
            'ppia' => 'nullable|string|max:255',
            'tindak_ppia' => 'nullable|string',
            'h' => 'nullable|in:R,NR',
            'tindak_h' => 'nullable|string',
            's' => 'nullable|in:R,NR',
            'tindak_s' => 'nullable|string',
            'hepatitis_b' => 'nullable|in:R,NR',
            'tindak_hepatitis_b' => 'nullable|string',
            'lain_lain' => 'nullable|string',
            'tindak_lain_lain' => 'nullable|string',

        ]);

        $newData = PemeriksaanLaboratoriumTri1::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('pemeriksaan-laboratorium-tri1.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = PemeriksaanLaboratoriumTri1::findOrFail($id);

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
