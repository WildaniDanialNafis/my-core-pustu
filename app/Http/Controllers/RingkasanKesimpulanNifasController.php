<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\RingkasanKesimpulanNifas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class RingkasanKesimpulanNifasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'ringkasan_kesimpulan_nifas';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new RingkasanKesimpulanNifas();

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
        $columns = Schema::getColumnListing('ringkasan_kesimpulan_nifas');

        $data = DataTables::of(RingkasanKesimpulanNifas::query()->orderBy('id_ringkasan_kesimpulan_nifas', 'desc'))->make(true);

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
            'keadaan_ibu' => 'nullable|in:Sehat,Sakit,Meninggal',
            'keadaan_bayi' => 'nullable|in:Sehat,Sakit,Kelainan Bawaan,Meninggal',
            'keterangan_keadaan_bayi' => 'nullable|string',
            'komplikasi_nifas' => 'nullable|in:Pendarahan,Infeksi,Hipertensi,Lain-lain',
            'keterangan_komplikasi_nifas' => 'nullable|string',
            'kesimpulan' => 'nullable|string',
        ]);

        RingkasanKesimpulanNifas::create($validated);

        return redirect()->route('ringkasan-kesimpulan-nifas.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = RingkasanKesimpulanNifas::findOrFail($id);
        $columns = Schema::getColumnListing('ringkasan_kesimpulan_nifas');
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
            'keadaan_ibu' => 'nullable|in:Sehat,Sakit,Meninggal',
            'keadaan_bayi' => 'nullable|in:Sehat,Sakit,Kelainan Bawaan,Meninggal',
            'keterangan_keadaan_bayi' => 'nullable|string',
            'komplikasi_nifas' => 'nullable|in:Pendarahan,Infeksi,Hipertensi,Lain-lain',
            'keterangan_komplikasi_nifas' => 'nullable|string',
            'kesimpulan' => 'nullable|string',
        ]);

        $newData = RingkasanKesimpulanNifas::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('ringkasan-kesimpulan-nifas.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = RingkasanKesimpulanNifas::findOrFail($id);

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
