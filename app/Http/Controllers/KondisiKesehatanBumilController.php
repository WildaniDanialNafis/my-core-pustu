<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiKesehatanBumil;
use App\Models\KondisiKesehatanBumil;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class KondisiKesehatanBumilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'kondisi_kesehatan_bumil';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new KondisiKesehatanBumil();

        $foreignColumn = $kesehatan->evaluasiKesehatanBumil()->getForeignKeyName(); 

        $columnDiambil = [$foreignColumn, 'faskes'];

        $foreignDatas = EvaluasiKesehatanBumil::all($columnDiambil);

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
        $columns = Schema::getColumnListing('kondisi_kesehatan_bumil');

        $data = DataTables::of(KondisiKesehatanBumil::query()->orderBy('id_kondisi_kesehatan_bumil', 'desc'))->make(true);

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
            'id_evaluasi_kesehatan_bumil' => 'required|integer|exists:evaluasi_kesehatan_bumil,id_evaluasi_kesehatan_bumil',
            'tanggal_periksa' => 'nullable|date',
            'tb' => 'nullable|numeric',
            'bb' => 'nullable|numeric',
            'lila' => 'nullable|numeric',
            'imt' => 'nullable|numeric',
            'status' => 'nullable|in:Kurus,Normal,Gemuk,Obesitas',
        ]);

        KondisiKesehatanBumil::create($validated);

        return redirect()->route('kondisi-kesehatan-bumil.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = KondisiKesehatanBumil::findOrFail($id);
        $columns = Schema::getColumnListing('kondisi_kesehatan_bumil');
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
            'id_evaluasi_kesehatan_bumil' => 'required|integer|exists:evaluasi_kesehatan_bumil,id_evaluasi_kesehatan_bumil',
            'tanggal_periksa' => 'nullable|date',
            'tb' => 'nullable|numeric',
            'bb' => 'nullable|numeric',
            'lila' => 'nullable|numeric',
            'imt' => 'nullable|numeric',
            'status' => 'nullable|in:Kurus,Normal,Gemuk,Obesitas',  
        ]);

        $newData = KondisiKesehatanBumil::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('kondisi-kesehatan-bumil.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = KondisiKesehatanBumil::findOrFail($id);

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
