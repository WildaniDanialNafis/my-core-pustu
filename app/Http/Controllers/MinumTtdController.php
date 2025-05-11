<?php

namespace App\Http\Controllers;

use App\Models\KontrolTtd;
use App\Models\MinumTtd;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class MinumTtdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'minum_ttd';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new MinumTtd();

        $foreignColumn = $kesehatan->kontrolTtd()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'nama_pengontrol'];

        $foreignDatas = KontrolTtd::all($columnDiambil);

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
        $columns = Schema::getColumnListing('minum_ttd');

        $data = DataTables::of(MinumTtd::query()->orderBy('id_minum_ttd', 'desc'))->make(true);

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
            'id_kontrol_ttd' => 'integer|exists:kontrol_ttd,id_kontrol_ttd',
            'bulan_ke' => 'string',
            'keterangan' => 'string|nullable',
            'nama_bulan' => 'string|nullable',            
        ]);

        MinumTtd::create($validated);

        return redirect()->route('minum-ttd.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = MinumTtd::findOrFail($id);
        $columns = Schema::getColumnListing('minum_ttd');
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
            'id_kontrol_ttd' => 'integer|exists:kontrol_ttd,id_kontrol_ttd',
            'bulan_ke' => 'string',
            'keterangan' => 'string|nullable',
            'nama_bulan' => 'string|nullable',            
        ]);

        $newData = MinumTtd::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('minum-ttd.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = MinumTtd::findOrFail($id);

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
