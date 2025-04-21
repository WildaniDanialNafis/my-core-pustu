<?php

namespace App\Http\Controllers;

use App\Models\BayiLahir;
use App\Models\Ibu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class BayiLahirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'bayi_lahir';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $kesehatan = new BayiLahir();

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
        $columns = Schema::getColumnListing('bayi_lahir');

        $data = DataTables::of(BayiLahir::query()->orderBy('id_bayi_lahir', 'desc'))->make(true);

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
            'anak_ke' => 'nullable|integer',
            'berat_lahir' => 'nullable|numeric',
            'panjang_badan' => 'nullable|numeric',
            'lingkar_kepala' => 'nullable|numeric',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan,Tidak Bisa Ditentukan',
            'kondisi_bayi' => 'nullable|in:Segera menangis,Menangis beberapa saat,Tidak menangis,Seluruh tubuh kemerahan,Anggota gerak kebiruan,Seluruh tubuh biru,Kelainan bawaan,Meninggal',
            'keterangan_kondisi_bayi' => 'nullable|string',
            'asuhan_bayi' => 'nullable|in:Inisiasi menyusu dini (IMD) dalam 1 jam pertama kelahiran bayi,Suntikan vitamin K1,Salep mata antibiotika profilaksis,Imunisasi HB0',
            'keterangan_tambahan' => 'nullable|string',
        ]);

        BayiLahir::create($validated);
        
        return redirect()->route('bayi-lahir.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = BayiLahir::findOrFail($id);
        $columns = Schema::getColumnListing('bayi_lahir');
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
            'anak_ke' => 'nullable|integer',
            'berat_lahir' => 'nullable|numeric',
            'panjang_badan' => 'nullable|numeric',
            'lingkar_kepala' => 'nullable|numeric',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan,Tidak Bisa Ditentukan',
            'kondisi_bayi' => 'nullable|in:Segera menangis,Menangis beberapa saat,Tidak menangis,Seluruh tubuh kemerahan,Anggota gerak kebiruan,Seluruh tubuh biru,Kelainan bawaan,Meninggal',
            'keterangan_kondisi_bayi' => 'nullable|string',
            'asuhan_bayi' => 'nullable|in:Inisiasi menyusu dini (IMD) dalam 1 jam pertama kelahiran bayi,Suntikan vitamin K1,Salep mata antibiotika profilaksis,Imunisasi HB0',
            'keterangan_tambahan' => 'nullable|string',
        ]);

        $newData = BayiLahir::findOrFail($id);

        $newData->update($validated);

        return redirect()->route('bayi-lahir.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = BayiLahir::findOrFail($id);

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
