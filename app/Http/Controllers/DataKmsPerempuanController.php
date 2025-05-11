<?php

namespace App\Http\Controllers;

use App\Models\DataKmsPerempuan;
use App\Models\KmsPerempuan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class DataKmsPerempuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'data_kms_perempuan';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new DataKmsPerempuan();

        $foreignColumn = $kesehatan->kmsPerempuan()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'nama_anak'];

        $foreignDatas = KmsPerempuan::all($columnDiambil);

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
        $columns = Schema::getColumnListing('data_kms_perempuan');

        $data = DataTables::of(DataKmsPerempuan::query()->orderBy('id_data_kms_perempuan', 'desc'))->make(true);

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
            'id_kms_perempuan' => 'required|exists:kms_perempuan,id_kms_perempuan',
            'umur' => 'nullable|integer|min:0',
            'bulan_penimbangan' => 'nullable|date',
            'bb' => 'nullable|numeric|min:0',
            'kbm' => 'nullable|numeric|min:0',
            'n_t' => 'nullable|in:N,T',
            'asi_eksklusif' => 'nullable|string|max:255',
        ]);

        DataKmsPerempuan::create($validated);

        return redirect()->route('data-kms-perempuan.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = DataKmsPerempuan::findOrFail($id);
        $columns = Schema::getColumnListing('data_kms_perempuan');
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
            'id_kms_perempuan' => 'required|exists:kms_perempuan,id_kms_perempuan',
            'umur' => 'nullable|integer|min:0',
            'bulan_penimbangan' => 'nullable|date',
            'bb' => 'nullable|numeric|min:0',
            'kbm' => 'nullable|numeric|min:0',
            'n_t' => 'nullable|in:N,T',
            'asi_eksklusif' => 'nullable|string|max:255',
        ]);

        $newData = DataKmsPerempuan::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('data-kms-perempuan.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = DataKmsPerempuan::findOrFail($id);

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
