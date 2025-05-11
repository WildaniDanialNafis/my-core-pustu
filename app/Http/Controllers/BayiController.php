<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Bayi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class BayiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'bayi';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new Bayi();

        $foreignColumn = $kesehatan->anak()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'nama'];

        $foreignDatas = Anak::all($columnDiambil);

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
        $columns = Schema::getColumnListing('bayi');

        $data = DataTables::of(Bayi::query()->orderBy('id_bayi', 'desc'))->make(true);

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
            'id_anak' => 'required|exists:anak,id_anak',
            'tanggal' => 'nullable|date',
            'tempat' => 'nullable|string|max:255',
            'bb' => 'nullable|numeric|min:0',
            'pb' => 'nullable|numeric|min:0',
            'lk' => 'nullable|numeric|min:0',
            'perkembangan' => 'nullable|string|max:255',
            'kie' => 'nullable|string|max:255',
            'imunisasi' => 'nullable|string|max:255',
            'vit_a' => 'nullable|string|max:255',
            'ppia1' => 'nullable|string|max:255',
            'ppia2' => 'nullable|string|max:255',
            'ppia3' => 'nullable|string|max:255',
        ]);

        Bayi::create($validated);

        return redirect()->route('bayi.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = Bayi::findOrFail($id);
        $columns = Schema::getColumnListing('bayi');
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
            'id_anak' => 'required|exists:anak,id_anak',
            'tanggal' => 'nullable|date',
            'tempat' => 'nullable|string|max:255',
            'bb' => 'nullable|numeric|min:0',
            'pb' => 'nullable|numeric|min:0',
            'lk' => 'nullable|numeric|min:0',
            'perkembangan' => 'nullable|string|max:255',
            'kie' => 'nullable|string|max:255',
            'imunisasi' => 'nullable|string|max:255',
            'vit_a' => 'nullable|string|max:255',
            'ppia1' => 'nullable|string|max:255',
            'ppia2' => 'nullable|string|max:255',
            'ppia3' => 'nullable|string|max:255',
        ]);

        $newData = Bayi::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('bayi.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = Bayi::findOrFail($id);

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
