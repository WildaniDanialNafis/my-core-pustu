<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\KapsulAnak;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class KapsulAnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'kapsul_anak';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new KapsulAnak();

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
        $columns = Schema::getColumnListing('kapsul_anak');

        $data = DataTables::of(KapsulAnak::query()->orderBy('id_kapsul_anak', 'desc'))->make(true);

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
            'id_umur_kapsul_anak' => 'required|exists:umur_kapsul_anak,id_umur_kapsul_anak',
            'kapsul' => 'nullable|in:Biru,Merah',
            'februari' => 'nullable|date',
            'agustus' => 'nullable|date',
            'obat_cacing' => 'nullable|date',
        ]);

        KapsulAnak::create($validated);

        return redirect()->route('kapsul-anak.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = KapsulAnak::findOrFail($id);
        $columns = Schema::getColumnListing('kapsul_anak');
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
            'id_umur_kapsul_anak' => 'required|exists:umur_kapsul_anak,id_umur_kapsul_anak',
            'kapsul' => 'nullable|in:Biru,Merah',
            'februari' => 'nullable|date',
            'agustus' => 'nullable|date',
            'obat_cacing' => 'nullable|date',
        ]);

        $newData = KapsulAnak::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('kapsul-anak.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = KapsulAnak::findOrFail($id);

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
