<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\PemeriksaanTrimester1;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class PemeriksaanTrimester1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'pemeriksaan_trimester1';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new PemeriksaanTrimester1();

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
        $columns = Schema::getColumnListing('pemeriksaan_trimester1');

        $data = DataTables::of(PemeriksaanTrimester1::query()->orderBy('id_pemeriksaan_trimester1', 'desc'))->make(true);

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
            'kesimpulan' => 'nullable|string',
            'rekomendasi' => 'nullable|string',   
        ]);

        PemeriksaanTrimester1::create($validated);

        return redirect()->route('pemeriksaan-trimester1.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = PemeriksaanTrimester1::findOrFail($id);
        $columns = Schema::getColumnListing('pemeriksaan_trimester1');
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
            'kesimpulan' => 'nullable|string',
            'rekomendasi' => 'nullable|string',  
        ]);

        $newData = PemeriksaanTrimester1::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('pemeriksaan-trimester1.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = PemeriksaanTrimester1::findOrFail($id);

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
