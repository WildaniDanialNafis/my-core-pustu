<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\User;
use App\Models\Wali;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = (new Wali())->getTable();

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $wali = new Wali();

        $foreignColumn = $wali->user()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'name'];

        $foreignDatas = User::all($columnDiambil);

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
        $table = (new Wali())->getTable();

        $columns = Schema::getColumnListing($table);

        $data = DataTables::of(Wali::query()->orderBy('id_' . $table, 'desc'))->make(true);

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
        // Validasi data
        $validated = $request->validate([
            'id_user' => 'required|exists:users,id_user', // Ensure user exists in the 'users' table
            'nama' => 'nullable|string', // Nullable string, no max length validation
            'nik' => 'nullable|string', // Nullable string, no exact length validation (16 is removed for testing)
            'tmpt_lahir' => 'nullable|string', // Nullable string
            'tgl_lahir' => 'nullable|date', // Nullable date, if provided, should be a valid date
            'gol_darah' => 'nullable|string', // Nullable string (can accommodate 1 or 2 character blood types)
            'jenis_pelayanan' => 'nullable|string', // Nullable string
            'no_asuransi' => 'nullable|string', // Nullable string
            'tgl_berlaku_asuransi' => 'nullable|date', // Nullable date
            'fasilitas_pelayanan_kesehatan' => 'nullable|string', // Nullable string
            'no_reg_kohort_bayi' => 'nullable|string', // Nullable string
            'no_reg_kohort_balita' => 'nullable|string', // Nullable string
            'no_catatan_medik_rs' => 'nullable|string', // Nullable string
            'pendidikan' => 'nullable|string', // Nullable string
            'pekerjaan' => 'nullable|string', // Nullable string
            'provinsi' => 'nullable|string', // Nullable string
            'kabupaten' => 'nullable|string', // Nullable string
            'alamat' => 'nullable|string', // Nullable string
            'telepon' => 'nullable|string', // Nullable string (no max length)
            'email' => 'nullable|email', // Nullable, must be a valid email if provided
        ]);

        // Simpan data setelah validasi
        Wali::create($validated);

        // Redirect atau response sukses
        return redirect()->route('wali.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = Wali::findOrFail($id);
        $columns = Schema::getColumnListing((new Wali())->getTable());
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
        // Validasi data
        $validated = $request->validate([
            'id_user' => 'required|exists:users,id_user', // Ensure user exists in the 'users' table
            'nama' => 'nullable|string', // Nullable string, no max length validation
            'nik' => 'nullable|string', // Nullable string, no exact length validation (16 is removed for testing)
            'tmpt_lahir' => 'nullable|string', // Nullable string
            'tgl_lahir' => 'nullable|date', // Nullable date, if provided, should be a valid date
            'gol_darah' => 'nullable|string', // Nullable string (can accommodate 1 or 2 character blood types)
            'jenis_pelayanan' => 'nullable|string', // Nullable string
            'no_asuransi' => 'nullable|string', // Nullable string
            'tgl_berlaku_asuransi' => 'nullable|date', // Nullable date
            'fasilitas_pelayanan_kesehatan' => 'nullable|string', // Nullable string
            'no_reg_kohort_bayi' => 'nullable|string', // Nullable string
            'no_reg_kohort_balita' => 'nullable|string', // Nullable string
            'no_catatan_medik_rs' => 'nullable|string', // Nullable string
            'pendidikan' => 'nullable|string', // Nullable string
            'pekerjaan' => 'nullable|string', // Nullable string
            'provinsi' => 'nullable|string', // Nullable string
            'kabupaten' => 'nullable|string', // Nullable string
            'alamat' => 'nullable|string', // Nullable string
            'telepon' => 'nullable|string', // Nullable string (no max length)
            'email' => 'nullable|email', // Nullable, must be a valid email if provided
        ]);

        // Cari data Ibu berdasarkan ID
        $wali = Wali::findOrFail($id);  // Menemukan data berdasarkan ID atau gagal jika tidak ditemukan

        // Update data Ibu dengan data yang sudah divalidasi
        $wali->update($validated);

        // Redirect atau response sukses
        return redirect()->route('wali.index')->with('success', 'Data ibu berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = Wali::findOrFail($id);

            $data->delete();

            return response()->json(['success' => 'Ibu berhasil dihapus!']);
        } catch (Exception $e) {
            Log::error('Error saat menghapus Ibu:', [
                'error' => $e->getMessage(),
                'id' => $id
            ]);

            return response()->json([
                'error' => 'Terjadi kesalahan saat menghapus data Ibu.',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
