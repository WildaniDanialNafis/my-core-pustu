<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\IbuBersalin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class IbuBersalinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'ibu_bersalin';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new IbuBersalin();

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
        $columns = Schema::getColumnListing('ibu_bersalin');

        $data = DataTables::of(IbuBersalin::query()->orderBy('id_ibu_bersalin', 'desc'))->make(true);

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
            'tanggal_bersalin' => 'nullable|date',
            'umur_kehamilan' => 'nullable|integer',
            'penolong_persalinan' => 'nullable|in:SpOg,Dokter Umum,Bidan',
            'keterangan_penolong_persalinan' => 'nullable|string',
            'cara_persalinan' => 'nullable|in:Normal,Tindakan',
            'keterangan_cara_persalinan' => 'nullable|string',
            'keadaan_ibu' => 'nullable|in:Sehat,Pendarahan,Demam,Kejang,Lokhia Berbau,Lain-lain,Meniggal',
            'keterangan_keadaan_ibu' => 'nullable|string',
            'kb_pasca_persalinan' => 'nullable|string',
            'keterangan_tambahan' => 'nullable|string',
        ]);

        IbuBersalin::create($validated);

        return redirect()->route('ibu-bersalin.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = IbuBersalin::findOrFail($id);
        $columns = Schema::getColumnListing('ibu_bersalin');
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
            'tanggal_bersalin' => 'nullable|date',
            'umur_kehamilan' => 'nullable|integer',
            'penolong_persalinan' => 'nullable|in:SpOg,Dokter Umum,Bidan',
            'keterangan_penolong_persalinan' => 'nullable|string',
            'cara_persalinan' => 'nullable|in:Normal,Tindakan',
            'keterangan_cara_persalinan' => 'nullable|string',
            'keadaan_ibu' => 'nullable|in:Sehat,Pendarahan,Demam,Kejang,Lokhia Berbau,Lain-lain,Meniggal',
            'keterangan_keadaan_ibu' => 'nullable|string',
            'kb_pasca_persalinan' => 'nullable|string',
            'keterangan_tambahan' => 'nullable|string',
        ]);

        $newData = IbuBersalin::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('ibu-bersalin.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = IbuBersalin::findOrFail($id);

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
