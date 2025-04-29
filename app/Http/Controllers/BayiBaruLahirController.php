<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\BayiBaruLahir;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class BayiBaruLahirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'bayi_baru_lahir';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new BayiBaruLahir();

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
        $columns = Schema::getColumnListing('bayi_baru_lahir');

        $data = DataTables::of(BayiBaruLahir::query()->orderBy('id_bayi_baru_lahir', 'desc'))->make(true);

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
            'kn' => 'nullable|in:0,1,2,3',
            'tanggal' => 'nullable|date',
            'tempat' => 'nullable|string|max:255',
            'perawatan_tali_pusat' => 'nullable|string|max:255',
            'imd' => 'nullable|string|max:255',
            'vitamin_k1' => 'nullable|string|max:255',
            'imunisasi_hepatitis_b' => 'nullable|string|max:255',
            'jenis_salep' => 'nullable|in:Salep,Tetes Mata Antibiotik',
            'salep' => 'nullable|string|max:255',
            'jenis_skrining' => 'nullable|in:Skrining BBL,SHK',
            'status_skrining' => 'nullable|string|max:255',
            'kie' => 'nullable|string|max:255',
            'ppia1' => 'nullable|string|max:255',
            'ppia2' => 'nullable|string|max:255',
            'ppia3' => 'nullable|string|max:255',
        ]);

        BayiBaruLahir::create($validated);

        return redirect()->route('bayi-baru-lahir.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = BayiBaruLahir::findOrFail($id);
        $columns = Schema::getColumnListing('bayi_baru_lahir');
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
            'kn' => 'nullable|in:0,1,2,3',
            'tanggal' => 'nullable|date',
            'tempat' => 'nullable|string|max:255',
            'perawatan_tali_pusat' => 'nullable|string|max:255',
            'imd' => 'nullable|string|max:255',
            'vitamin_k1' => 'nullable|string|max:255',
            'imunisasi_hepatitis_b' => 'nullable|string|max:255',
            'jenis_salep' => 'nullable|in:Salep,Tetes Mata Antibiotik',
            'salep' => 'nullable|string|max:255',
            'jenis_skrining' => 'nullable|in:Skrining BBL,SHK',
            'status_skrining' => 'nullable|string|max:255',
            'kie' => 'nullable|string|max:255',
            'ppia1' => 'nullable|string|max:255',
            'ppia2' => 'nullable|string|max:255',
            'ppia3' => 'nullable|string|max:255',
        ]);

        $newData = BayiBaruLahir::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('bayi-baru-lahir.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = BayiBaruLahir::findOrFail($id);

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
