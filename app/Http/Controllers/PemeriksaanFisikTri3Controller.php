<?php

namespace App\Http\Controllers;

use App\Models\PemeriksaanFisikTri3;
use App\Models\PemeriksaanTrimester3;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class PemeriksaanFisikTri3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'pemeriksaan_fisik_tri3';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new PemeriksaanFisikTri3();

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
        $columns = Schema::getColumnListing('pemeriksaan_fisik_tri3');

        $data = DataTables::of(PemeriksaanFisikTri3::query()->orderBy('id_pemeriksaan_fisik_tri3', 'desc'))->make(true);

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
            'keadaan_umum' => 'nullable|in:Baik,Sedang,Buruk',
            'konjuctiva' => 'nullable|in:Normal,Tidak Normal',
            'sklera' => 'nullable|in:Normal,Tidak Normal',
            'gigi_mulut' => 'nullable|in:Normal,Tidak Normal',
            'tht' => 'nullable|in:Normal,Tidak Normal',
            'leher' => 'nullable|in:Normal,Tidak Normal',
            'jantung' => 'nullable|in:Normal,Tidak Normal',
            'paru' => 'nullable|in:Normal,Tidak Normal',
            'perut' => 'nullable|in:Normal,Tidak Normal',
            'tungkai' => 'nullable|in:Normal,Tidak Normal',        
        ]);

        PemeriksaanFisikTri3::create($validated);

        return redirect()->route('pemeriksaan-fisik-tri3.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = PemeriksaanFisikTri3::findOrFail($id);
        $columns = Schema::getColumnListing('pemeriksaan_fisik_tri3');
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
            'keadaan_umum' => 'nullable|string|max:255',
            'konjuctiva' => 'nullable|in:Normal,Tidak Normal',
            'sklera' => 'nullable|in:Normal,Tidak Normal',
            'kulit' => 'nullable|in:Normal,Tidak Normal',
            'leher' => 'nullable|in:Normal,Tidak Normal',
            'gigi_mulut' => 'nullable|in:Normal,Tidak Normal',
            'tht' => 'nullable|in:Normal,Tidak Normal',
            'jantung' => 'nullable|in:Normal,Tidak Normal',
            'paru' => 'nullable|in:Normal,Tidak Normal',
            'perut' => 'nullable|in:Normal,Tidak Normal',
            'tungkai' => 'nullable|in:Normal,Tidak Normal',
        ]);

        $newData = PemeriksaanFisikTri3::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('pemeriksaan-fisik-tri3.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = PemeriksaanFisikTri3::findOrFail($id);

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
