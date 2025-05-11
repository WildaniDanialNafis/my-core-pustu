<?php

namespace App\Http\Controllers;

use App\Models\Kesehatan1;
use App\Models\Kesehatan2;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class Kesehatan2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'kesehatan2';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new Kesehatan2();

        $foreignColumn = $kesehatan->kesehatan1()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'id_kesehatan1'];

        $foreignDatas = Kesehatan1::all($columnDiambil);

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
        $columns = Schema::getColumnListing('kesehatan2');
    
        $query = Kesehatan2::query()->orderBy('id_kesehatan2', 'desc');
    
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
            'id_kesehatan1' => 'required|exists:kesehatan1,id_kesehatan1',
            'trimester' => 'nullable|in:1,2,3',
            'tanggal_periksa' => 'nullable|date',
            'tempat' => 'nullable|string|max:50',
            'timbang' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'ukur_lingkar_lengan_atas' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'tekanan_darah_sistolik' => 'nullable|integer|min:0',
            'tekanan_darah_diastolik' => 'nullable|integer|min:0',
            'periksa_tinggi_rahim' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'periksa_letak_dan_denyut_jantung_janin' => 'nullable|string',
            'konseling' => 'nullable|string',
            'skrining_dokter' => 'nullable|string',
            'tablet_tambah_darah' => 'nullable|string|max:50',
            'test_lab_hemoglobin' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'test_golongan_darah' => 'nullable|string|max:3',
            'test_lab_protein_urine' => 'nullable|string|max:10',
            'test_lab_gula_darah' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'ppia1' => 'nullable|string|max:50',
            'ppia2' => 'nullable|string|max:50',
            'ppia3' => 'nullable|string|max:50',
            'test_laksana_kasus' => 'nullable|string',
        ]);

        Kesehatan2::create($validated);

        return redirect()->route('kesehatan2.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = Kesehatan2::findOrFail($id);
        $columns = Schema::getColumnListing('kesehatan2');
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
            'id_kesehatan1' => 'required|exists:kesehatan1,id_kesehatan1',
            'trimester' => 'nullable|in:1,2,3',
            'tanggal_periksa' => 'nullable|date',
            'tempat' => 'nullable|string|max:50',
            'timbang' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'ukur_lingkar_lengan_atas' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'tekanan_darah_sistolik' => 'nullable|integer|min:0',
            'tekanan_darah_diastolik' => 'nullable|integer|min:0',
            'periksa_tinggi_rahim' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'periksa_letak_dan_denyut_jantung_janin' => 'nullable|string',
            'konseling' => 'nullable|string',
            'skrining_dokter' => 'nullable|string',
            'tablet_tambah_darah' => 'nullable|string|max:50',
            'test_lab_hemoglobin' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'test_golongan_darah' => 'nullable|string|max:3',
            'test_lab_protein_urine' => 'nullable|string|max:10',
            'test_lab_gula_darah' => 'nullable|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'ppia1' => 'nullable|string|max:50',
            'ppia2' => 'nullable|string|max:50',
            'ppia3' => 'nullable|string|max:50',
            'test_laksana_kasus' => 'nullable|string',
        ]);

        $newData = Kesehatan2::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('kesehatan2.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = Kesehatan2::findOrFail($id);

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
