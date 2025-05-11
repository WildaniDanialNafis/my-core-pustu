<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\Kesehatan1;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class Kesehatan1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'kesehatan1';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new Kesehatan1();

        $foreignColumn = $kesehatan->ibu()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'nama'];

        $foreignDatas = Ibu::all($columnDiambil);

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
    public function create(Request $request)
    {
        $columns = Schema::getColumnListing('kesehatan1');
    
        $query = Kesehatan1::query()->orderBy('id_kesehatan1', 'desc');
    
        if ($request->filled('pencarian')) {
            $query->where(function ($q) use ($request, $columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'like', '%' . $request->pencarian . '%');
                }
            });
        }
    
        $data = DataTables::of($query)->make(true);
    
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
            'hpht' => 'nullable|date',
            'bb' => 'nullable|integer',
            'tb' => 'nullable|integer',
            'imt' => 'nullable|integer',
        ]);

        Kesehatan1::create($validated);

        return redirect()->route('kesehatan1.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = Kesehatan1::findOrFail($id);
        $columns = Schema::getColumnListing('kesehatan1');
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
            'hpht' => 'nullable|date',
            'bb' => 'nullable|integer',
            'tb' => 'nullable|integer',
            'imt' => 'nullable|integer',
        ]);

        $newData = Kesehatan1::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('kesehatan1.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = Kesehatan1::findOrFail($id);

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
