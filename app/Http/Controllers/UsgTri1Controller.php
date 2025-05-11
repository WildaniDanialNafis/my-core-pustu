<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanTrimester1;
use App\Models\UsgTri1;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class UsgTri1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'usg_tri1';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new UsgTri1();

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
        $columns = Schema::getColumnListing('usg_tri1');

        $data = DataTables::of(UsgTri1::query()->orderBy('id_usg_tri1', 'desc'))->make(true);

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
            'hpht' => 'nullable|date',
            'usia_kehamilan' => 'nullable|integer|min:0',
            'gestational_sac' => 'nullable|numeric|min:0',
            'crown_rump_length' => 'nullable|numeric|min:0',
            'denyut_jantung_janin' => 'nullable|integer|min:0',
            'sesuai_usia_kehamilan' => 'nullable|integer|in:0,1',
            'letak_janin' => 'nullable|in:intrauterin,ekstrauterin',
            'taksiran_persalinan' => 'nullable|string|max:255',
            'hasil_usg' => 'nullable|string|max:255',
        ]);

        UsgTri1::create($validated);

        return redirect()->route('usg-tri1.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = UsgTri1::findOrFail($id);
        $columns = Schema::getColumnListing('usg_tri1');
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
            'hpht' => 'nullable|date',
            'usia_kehamilan' => 'nullable|integer|min:0',
            'gestational_sac' => 'nullable|numeric|min:0',
            'crown_rump_length' => 'nullable|numeric|min:0',
            'denyut_jantung_janin' => 'nullable|integer|min:0',
            'sesuai_usia_kehamilan' => 'nullable|integer|in:0,1',
            'letak_janin' => 'nullable|in:intrauterin,ekstrauterin',
            'taksiran_persalinan' => 'nullable|string|max:255',
            'hasil_usg' => 'nullable|string|max:255'
        ]);

        $newData = UsgTri1::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('usg-tri1.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = UsgTri1::findOrFail($id);

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
