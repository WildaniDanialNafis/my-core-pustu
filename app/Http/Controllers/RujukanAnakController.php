<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\RujukanAnak;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class RujukanAnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'rujukan_anak';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new RujukanAnak();

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
        $columns = Schema::getColumnListing('rujukan_anak');

        $data = DataTables::of(RujukanAnak::query()->orderBy('id_rujukan_anak', 'desc'))->make(true);

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
            'dirujuk_ke' => 'nullable|string|max:255',
            'sebab_dirujuk' => 'nullable|string',
            'diagnosis_sementara' => 'nullable|string',
            'tindakan_sementara' => 'nullable|string',
            'nama_yang_merujuk' => 'nullable|string|max:255',
            'paraf_yang_merujuk' => 'nullable|string|max:255',
        ]);

        RujukanAnak::create($validated);

        return redirect()->route('rujukan-anak.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = RujukanAnak::findOrFail($id);
        $columns = Schema::getColumnListing('rujukan_anak');
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
            'dirujuk_ke' => 'nullable|string|max:255',
            'sebab_dirujuk' => 'nullable|string',
            'diagnosis_sementara' => 'nullable|string',
            'tindakan_sementara' => 'nullable|string',
            'nama_yang_merujuk' => 'nullable|string|max:255',
            'paraf_yang_merujuk' => 'nullable|string|max:255',
        ]);

        $newData = RujukanAnak::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('rujukan-anak.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = RujukanAnak::findOrFail($id);

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
