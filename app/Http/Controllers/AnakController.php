<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Wali;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = (new Anak())->getTable();

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $anak = new Anak();

        $foreignColumn = $anak->wali()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'nama'];

        $foreignDatas = Wali::all($columnDiambil);

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
        $table = (new Anak())->getTable();

        $columns = Schema::getColumnListing($table);

        $data = DataTables::of(Anak::query()->orderBy('id_' . $table, 'desc'))->make(true);

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
            'id_wali' => 'required|exists:wali,id_wali', // Ensures that 'id_wali' exists in the 'wali' table
            'nama' => 'nullable|string', // Nullable string (name can be provided or left empty)
            'anak_ke' => 'nullable|integer', // Nullable integer (should be an integer if provided)
            'no_akte_kelahiran' => 'nullable|string', // Nullable string (birth certificate number)
            'nik' => 'nullable|string', // Nullable string (NIK)
            'tmpt_lahir' => 'nullable|string', // Nullable string (place of birth)
            'tgl_lahir' => 'nullable|date', // Nullable date (birth date)
            'gol_darah' => 'nullable|string', // Nullable string (blood type)
            'jenis_pelayanan' => 'nullable|string', // Nullable string (service type)
            'no_asuransi' => 'nullable|string', // Nullable string (insurance number)
            'tgl_berlaku_asuransi' => 'nullable|date', // Nullable date (insurance valid from)
            'fasilitas_pelayanan_kesehatan' => 'nullable|string', // Nullable string (healthcare facility)
            'no_reg_kohort_bayi' => 'nullable|string', // Nullable string (baby cohort registration number)
            'no_reg_kohort_balita' => 'nullable|string', // Nullable string (child cohort registration number)
            'no_catatan_medik_rs' => 'nullable|string', // Nullable string (medical record number)
            'provinsi' => 'nullable|string', // Nullable string (province)
            'kabupaten' => 'nullable|string', // Nullable string (city)
            'alamat' => 'nullable|string', // Nullable string (address)
            'telepon' => 'nullable|string', // Nullable string (phone number)
        ]);

        // Simpan data setelah validasi
        Anak::create($validated);

        // Redirect atau response sukses
        return redirect()->route('anak.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = Anak::findOrFail($id);
        $columns = Schema::getColumnListing((new Anak())->getTable());
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
            'id_wali' => 'required|exists:wali,id_wali', // Ensures that 'id_wali' exists in the 'wali' table
            'nama' => 'nullable|string', // Nullable string (name can be provided or left empty)
            'anak_ke' => 'nullable|integer', // Nullable integer (should be an integer if provided)
            'no_akte_kelahiran' => 'nullable|string', // Nullable string (birth certificate number)
            'nik' => 'nullable|string', // Nullable string (NIK)
            'tmpt_lahir' => 'nullable|string', // Nullable string (place of birth)
            'tgl_lahir' => 'nullable|date', // Nullable date (birth date)
            'gol_darah' => 'nullable|string', // Nullable string (blood type)
            'jenis_pelayanan' => 'nullable|string', // Nullable string (service type)
            'no_asuransi' => 'nullable|string', // Nullable string (insurance number)
            'tgl_berlaku_asuransi' => 'nullable|date', // Nullable date (insurance valid from)
            'fasilitas_pelayanan_kesehatan' => 'nullable|string', // Nullable string (healthcare facility)
            'no_reg_kohort_bayi' => 'nullable|string', // Nullable string (baby cohort registration number)
            'no_reg_kohort_balita' => 'nullable|string', // Nullable string (child cohort registration number)
            'no_catatan_medik_rs' => 'nullable|string', // Nullable string (medical record number)
            'provinsi' => 'nullable|string', // Nullable string (province)
            'kabupaten' => 'nullable|string', // Nullable string (city)
            'alamat' => 'nullable|string', // Nullable string (address)
            'telepon' => 'nullable|string', // Nullable string (phone number)
        ]);

        // Cari data Ibu berdasarkan ID
        $anak = Anak::findOrFail($id);  // Menemukan data berdasarkan ID atau gagal jika tidak ditemukan

        // Update data Ibu dengan data yang sudah divalidasi
        $anak->update($validated);

        // Redirect atau response sukses
        return redirect()->route('anak.index')->with('success', 'Data ibu berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = Anak::findOrFail($id);

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
