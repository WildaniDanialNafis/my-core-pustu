<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\LingkarKepalaLaki;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class LingkarKepalaLakiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'lingkar_kepala_laki';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new LingkarKepalaLaki();

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
        $columns = Schema::getColumnListing('lingkar_kepala_laki');

        $data = DataTables::of(LingkarKepalaLaki::query()->orderBy('id_lingkar_kepala_laki', 'desc'))->make(true);

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
            'lingkar_kepala' => 'nullable|numeric|min:0',
            'bulan' => 'nullable|integer|min:0|max:11',
            'tahun' => 'nullable|integer|min:0',
        ]);

        LingkarKepalaLaki::create($validated);

        return redirect()->route('lingkar-kepala-laki.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = LingkarKepalaLaki::findOrFail($id);
        $columns = Schema::getColumnListing('lingkar_kepala_laki');
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
            'lingkar_kepala' => 'nullable|numeric|min:0',
            'bulan' => 'nullable|integer|min:0|max:11',
            'tahun' => 'nullable|integer|min:0',
        ]);

        $newData = LingkarKepalaLaki::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('lingkar-kepala-laki.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = LingkarKepalaLaki::findOrFail($id);

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
