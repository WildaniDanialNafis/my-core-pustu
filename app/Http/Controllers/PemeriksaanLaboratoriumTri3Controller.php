<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanLaboratoriumTri3;
use App\Models\PemeriksaanTrimester3;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class PemeriksaanLaboratoriumTri3Controller extends Controller
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

        $kesehatan = new PemeriksaanLaboratoriumTri3();

        $foreignColumn = $kesehatan->pemeriksaanTrimester3()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'id_pemeriksaan_trimester3'];

        $foreignDatas = PemeriksaanTrimester3::all($columnDiambil);

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

        $data = DataTables::of(PemeriksaanLaboratoriumTri3::query()->orderBy('id_pemeriksaan_laboratorium_tri1', 'desc'))->make(true);

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
            'id_pemeriksaan_trimester3' => 'required|exists:pemeriksaan_trimester3,id_pemeriksaan_trimester3',
            'tanggal' => 'nullable|date',
            'hemoglobin' => 'nullable|numeric|min:0',
            'tindak_hemoglobin' => 'nullable|string',
            'gula_darah_puasa' => 'nullable|numeric|min:0',
            'tindak_gula_puasa' => 'nullable|string',
            'gula_darah_2_jam_post_pradinal' => 'nullable|numeric|min:0',
            'tindak_gula_darah_2_jam_post_pradinal' => 'nullable|string',

        ]);

        PemeriksaanLaboratoriumTri3::create($validated);

        return redirect()->route('pemeriksaan-laboratorium-tri3.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = PemeriksaanLaboratoriumTri3::findOrFail($id);
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
            'id_pemeriksaan_trimester3' => 'required|exists:pemeriksaan_trimester3,id_pemeriksaan_trimester3',
            'tanggal' => 'nullable|date',
            'hemoglobin' => 'nullable|numeric|min:0',
            'tindak_hemoglobin' => 'nullable|string',
            'gula_darah_puasa' => 'nullable|numeric|min:0',
            'tindak_gula_puasa' => 'nullable|string',
            'gula_darah_2_jam_post_pradinal' => 'nullable|numeric|min:0',
            'tindak_gula_darah_2_jam_post_pradinal' => 'nullable|string',
        ]);

        $newData = PemeriksaanLaboratoriumTri3::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('pemeriksaan-laboratorium-tri3.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = PemeriksaanLaboratoriumTri3::findOrFail($id);

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
