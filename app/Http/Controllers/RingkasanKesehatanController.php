<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\RingkasanKesehatan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class RingkasanKesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'ringkasan_kesehatan';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new RingkasanKesehatan();

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
        $columns = Schema::getColumnListing('ringkasan_kesehatan');

        $data = DataTables::of(RingkasanKesehatan::query()->orderBy('id_ringkasan_kesehatan', 'desc'))->make(true);

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
            'tanggal_periksa' => 'nullable|date',
            'nama' => 'nullable|string|max:255',
            'paraf' => 'nullable|string|max:255',
            'keluhan' => 'nullable|string',
            'pemeriksaan' => 'nullable|string',
            'tindakan' => 'nullable|string',
            'tanggal_kembali' => 'nullable|date',
        ]);

        RingkasanKesehatan::create($validated);

        return redirect()->route('ringkasan-kesehatan.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = RingkasanKesehatan::findOrFail($id);
        $columns = Schema::getColumnListing('ringkasan_kesehatan');
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
            'tanggal_periksa' => 'nullable|date',
            'nama' => 'nullable|string|max:255',
            'paraf' => 'nullable|string|max:255',
            'keluhan' => 'nullable|string',
            'pemeriksaan' => 'nullable|string',
            'tindakan' => 'nullable|string',
            'tanggal_kembali' => 'nullable|date',
        ]);

        $newData = RingkasanKesehatan::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('ringkasan-kesehatan.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = RingkasanKesehatan::findOrFail($id);

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
