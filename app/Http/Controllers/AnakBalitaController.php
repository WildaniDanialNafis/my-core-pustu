<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\AnakBalita;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class AnakBalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'anak_balita';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new AnakBalita();

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
        $columns = Schema::getColumnListing('anak_balita');

        $data = DataTables::of(AnakBalita::query()->orderBy('id_anak_balita', 'desc'))->make(true);

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
            'tipe' => 'nullable|in:0-1,1-2,2-3,3-4,4-5',
            'tanggal' => 'nullable|date',
            'tempat' => 'nullable|string|max:255',
            'bb' => 'nullable|numeric|min:0',
            'pb' => 'nullable|numeric|min:0',
            'lk' => 'nullable|numeric|min:0',
            'perkembangan' => 'nullable|string|max:255',
            'kie' => 'nullable|string|max:255',
            'imunisasi' => 'nullable|string|max:255',
            'vit_a' => 'nullable|string|max:255',
            'obat_cacing' => 'nullable|string|max:255',
            'ppia1' => 'nullable|string|max:255',
            'ppia2' => 'nullable|string|max:255',
            'ppia3' => 'nullable|string|max:255',
        ]);

        AnakBalita::create($validated);

        return redirect()->route('anak-balita.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = AnakBalita::findOrFail($id);
        $columns = Schema::getColumnListing('anak_balita');
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
            'tipe' => 'nullable|in:0-1,1-2,2-3,3-4,4-5',
            'tanggal' => 'nullable|date',
            'tempat' => 'nullable|string|max:255',
            'bb' => 'nullable|numeric|min:0',
            'pb' => 'nullable|numeric|min:0',
            'lk' => 'nullable|numeric|min:0',
            'perkembangan' => 'nullable|string|max:255',
            'kie' => 'nullable|string|max:255',
            'imunisasi' => 'nullable|string|max:255',
            'vit_a' => 'nullable|string|max:255',
            'obat_cacing' => 'nullable|string|max:255',
            'ppia1' => 'nullable|string|max:255',
            'ppia2' => 'nullable|string|max:255',
            'ppia3' => 'nullable|string|max:255',
        ]);

        $newData = AnakBalita::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('anak-balita.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = AnakBalita::findOrFail($id);

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
