<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\Kesehatan1;
use App\Models\Kesehatan2;
use App\Models\KesehatanBersalin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class KesehatanBersalinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'kesehatan_bersalin';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new KesehatanBersalin();

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
        $columns = Schema::getColumnListing('kesehatan_bersalin');

        $data = DataTables::of(KesehatanBersalin::query()->orderBy('id_kesehatan_bersalin', 'desc'))->make(true);

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
            'taksiran_persalinan' => 'nullable|string|max:255',
            'fasyankes' => 'nullable|string|max:255',
            'rujukan' => 'nullable|string|max:255',
            'inisiasi_menyusui_dini' => 'nullable|string',
        ]);

        KesehatanBersalin::create($validated);

        return redirect()->route('kesehatan-bersalin.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = KesehatanBersalin::findOrFail($id);
        $columns = Schema::getColumnListing('kesehatan_bersalin');
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
            'taksiran_persalinan' => 'nullable|string|max:255',
            'fasyankes' => 'nullable|string|max:255',
            'rujukan' => 'nullable|string|max:255',
            'inisiasi_menyusui_dini' => 'nullable|string',
        ]);

        $newData = KesehatanBersalin::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('kesehatan-bersalin.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = KesehatanBersalin::findOrFail($id);

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
