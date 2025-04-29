<?php

namespace App\Http\Controllers;

use App\Models\DataKesehatanGigi;
use App\Models\KesehatanGigi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class DataKesehatanGigiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'data_kesehatan_gigi';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new DataKesehatanGigi();

        $foreignColumn = $kesehatan->kesehatanGigi()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'nama'];

        $foreignDatas = KesehatanGigi::all($columnDiambil);

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
        $columns = Schema::getColumnListing('data_kesehatan_gigi');

        $data = DataTables::of(DataKesehatanGigi::query()->orderBy('id_data_kesehatan_gigi', 'desc'))->make(true);

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
            'id_kesehatan_gigi' => 'required|exists:kesehatan_gigi,id_kesehatan_gigi',
            'pemeriksaan' => 'nullable|date',
            'jumlah_gigi' => 'nullable|integer|min:0',
            'jumlah_gigi_berlubang' => 'nullable|integer|min:0',
            'plak' => 'nullable|in:Bersih,Kotor',
            'risiko_gigi_berlubang' => 'nullable|in:Tinggi,Sedang,Rendah',
        ]);

        DataKesehatanGigi::create($validated);

        return redirect()->route('data-kesehatan-gigi.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = DataKesehatanGigi::findOrFail($id);
        $columns = Schema::getColumnListing('data_kesehatan_gigi');
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
            'id_kesehatan_gigi' => 'required|exists:kesehatan_gigi,id_kesehatan_gigi',
            'pemeriksaan' => 'nullable|date',
            'jumlah_gigi' => 'nullable|integer|min:0',
            'jumlah_gigi_berlubang' => 'nullable|integer|min:0',
            'plak' => 'nullable|in:Bersih,Kotor',
            'risiko_gigi_berlubang' => 'nullable|in:Tinggi,Sedang,Rendah',
        ]);

        $newData = DataKesehatanGigi::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('data-kesehatan-gigi.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = DataKesehatanGigi::findOrFail($id);

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
