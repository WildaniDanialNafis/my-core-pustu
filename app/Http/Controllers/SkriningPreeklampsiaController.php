<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\SkriningPreeklampsia;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class SkriningPreeklampsiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'skrining_preeklampsia';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new SkriningPreeklampsia();

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
        $columns = Schema::getColumnListing('skrining_preeklampsia');

        $data = DataTables::of(SkriningPreeklampsia::query()->orderBy('id_skrining_preeklampsia', 'desc'))->make(true);

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
            'paraf_dokter' => 'nullable|string|max:255',
            'nama_dokter' => 'nullable|string|max:255',
        ]);

        SkriningPreeklampsia::create($validated);

        return redirect()->route('skrining-preeklampsia.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = SkriningPreeklampsia::findOrFail($id);
        $columns = Schema::getColumnListing('skrining_preeklampsia');
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
            'paraf_dokter' => 'nullable|string|max:255',
            'nama_dokter' => 'nullable|string|max:255',
        ]);

        $newData = SkriningPreeklampsia::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('skrining-preeklampsia.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = SkriningPreeklampsia::findOrFail($id);

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
