<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\MenyambutPersalinan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class MenyambutPersalinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'menyambut_persalinan';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new MenyambutPersalinan();

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
        $columns = Schema::getColumnListing('menyambut_persalinan');

        $data = DataTables::of(MenyambutPersalinan::query()->orderBy('id_menyambut_persalinan', 'desc'))->make(true);

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
            'id_ibu' => 'required|integer',
            'nama_pembuat' => 'nullable|string',
            'alamat' => 'nullable|string',
            'perkiraan_bulan_lahir' => 'nullable|string',
            'perkiraan_tahun_lahir' => 'nullable|string',
            'dana_persalinan' => 'nullable|string',
            'dibantu_oleh' => 'nullable|string',
            'metode_kontrasepsi' => 'nullable|string',
            'golongan_darah' => 'nullable|string',
            'rhesus' => 'nullable|string',
            'bersedia_dirujuk' => 'nullable|string',
            'tanggal' => 'nullable|date',
            'persetujuan' => 'nullable|string',
            'paraf_persetujuan' => 'nullable|string',
            'nama_persetujuan' => 'nullable|string',
            'paraf_bumil' => 'nullable|string',
            'nama_bumil' => 'nullable|string',
            'nakes' => 'nullable|string',
            'paraf_nakes' => 'nullable|string',
            'nama_nakes' => 'nullable|string',           
        ]);

        MenyambutPersalinan::create($validated);

        return redirect()->route('menyambut-persalinan.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = MenyambutPersalinan::findOrFail($id);
        $columns = Schema::getColumnListing('menyambut_persalinan');
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
            'id_ibu' => 'required|integer',
            'nama_pembuat' => 'nullable|string',
            'alamat' => 'nullable|string',
            'perkiraan_bulan_lahir' => 'nullable|string',
            'perkiraan_tahun_lahir' => 'nullable|string',
            'dana_persalinan' => 'nullable|string',
            'dibantu_oleh' => 'nullable|string',
            'metode_kontrasepsi' => 'nullable|string',
            'golongan_darah' => 'nullable|string',
            'rhesus' => 'nullable|string',
            'bersedia_dirujuk' => 'nullable|string',
            'tanggal' => 'nullable|date',
            'persetujuan' => 'nullable|string',
            'paraf_persetujuan' => 'nullable|string',
            'nama_persetujuan' => 'nullable|string',
            'paraf_bumil' => 'nullable|string',
            'nama_bumil' => 'nullable|string',
            'nakes' => 'nullable|string',
            'paraf_nakes' => 'nullable|string',
            'nama_nakes' => 'nullable|string',           
        ]);

        $newData = MenyambutPersalinan::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('menyambut-persalinan.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = MenyambutPersalinan::findOrFail($id);

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
