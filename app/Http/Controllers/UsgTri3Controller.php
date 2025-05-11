<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanTrimester3;
use App\Models\UsgTri3;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class UsgTri3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'usg_tri3';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new UsgTri3();

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
        $columns = Schema::getColumnListing('usg_tri3');

        $data = DataTables::of(UsgTri3::query()->orderBy('id_usg_tri3', 'desc'))->make(true);

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
            'hpht' => 'nullable|date',
            'kehamilan' => 'nullable|integer|min:1',
            'janin' => 'nullable|in:Hidup,Tidak Hidup',
            'bpd' => 'nullable|numeric|min:0',
            'jumlah_janin' => 'nullable|in:Tunggal,Ganda',
            'hc' => 'nullable|numeric|min:0',
            'letak_janin' => 'nullable|in:Presentasi Kepala,Presentasi Sungsang,Presentasi Melintang',
            'berat_janin' => 'nullable|numeric|min:0',
            'fl' => 'nullable|numeric|min:0',
            'plasenta' => 'nullable|in:Normal,Tidak Normal',
            'cairan_ketuban' => 'nullable|numeric|min:0',
            'usia_kehamilan' => 'nullable|integer|min:0|max:50',
        ]);

        UsgTri3::create($validated);

        return redirect()->route('usg-tri3.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = UsgTri3::findOrFail($id);
        $columns = Schema::getColumnListing('usg_tri3');
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
            'hpht' => 'nullable|date',
            'kehamilan' => 'nullable|integer|min:1',
            'janin' => 'nullable|in:Hidup,Tidak Hidup',
            'bpd' => 'nullable|numeric|min:0',
            'jumlah_janin' => 'nullable|in:Tunggal,Ganda',
            'hc' => 'nullable|numeric|min:0',
            'letak_janin' => 'nullable|in:Presentasi Kepala,Presentasi Sungsang,Presentasi Melintang',
            'berat_janin' => 'nullable|numeric|min:0',
            'fl' => 'nullable|numeric|min:0',
            'plasenta' => 'nullable|in:Normal,Tidak Normal',
            'cairan_ketuban' => 'nullable|numeric|min:0',
            'usia_kehamilan' => 'nullable|integer|min:0|max:50',
        ]);

        $newData = UsgTri3::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('usg-tri3.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = UsgTri3::findOrFail($id);

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
