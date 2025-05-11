<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\Facades\DataTables;

class IbuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'ibu';

        $columns = Schema::getColumnListing($table);

        $columnTypes = [];
        foreach ($columns as $column) {
            $columnTypes[$column] = Schema::getColumnType($table, $column);
        }

        $ibu = new Ibu();

        $foreignColumn = $ibu->user()->getForeignKeyName();

        $columnDiambil = [$foreignColumn, 'name'];

        $foreignDatas = User::all($columnDiambil);

        // dd($columns);

        return view('admin.layouts2.template-table', [
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
    public function create(Request $request)
    {
        $columns = Schema::getColumnListing('ibu');
    
        if ($request->has('columns') && $request->input('columns') === 'columns') {
            return response()->json([
                'columns' => $columns
            ]);
        }
    
        $query = Ibu::query();
    
        // Server-side search dari input 'search.value' (standar DataTables)
        $searchValue = $request->input('search.value');
    
        if (!empty($searchValue)) {
            $query->where(function ($q) use ($searchValue, $columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'like', '%' . $searchValue . '%');
                }
            });
        }
    
        // Hitung total dan hasil filter
        $totalRecords = Ibu::count();
        $filteredRecords = $query->count();
    
        // Ambil data paginasi
        $data = $query->orderBy('id_ibu', 'desc')
                      ->skip($request->input('start', 0))
                      ->take($request->input('length', 10))
                      ->get();
    
        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $filteredRecords,
            'data' => $data,
        ]);
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'id_user' => 'required|exists:users,id_user', // Pastikan id_user ada di tabel users
            'nama' => 'nullable|string|max:255',
            'pembiayaan' => 'nullable|string|max:255',
            'no_jkn' => 'nullable|string|max:50',
            'faskes_tk_1' => 'nullable|string|max:255',
            'faskes_rujukan' => 'nullable|string|max:255',
            'gol_darah' => 'nullable|string|max:2',  // 2 karakter untuk gol_darah
            'tmpt_lahir' => 'nullable|string|max:100',
            'tgl_lahir' => 'nullable|date',
            'pendidikan' => 'nullable|string|max:100',
            'pekerjaan' => 'nullable|string|max:100',
            'provinsi' => 'nullable|string|max:100',
            'kabupaten' => 'nullable|string|max:100',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:20',
            'puskesmas_domisili' => 'nullable|string|max:255',
            'no_reg_kohort_ibu' => 'nullable|string|max:50',
        ]);

        // Simpan data setelah validasi
        Ibu::create($validated);

        // Redirect atau response sukses
        return redirect()->route('ibu.index')->with('success', 'Data ibu berhasil ditambahkan!');
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
        $data = Ibu::findOrFail($id);
        $columns = Schema::getColumnListing('ibu');
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
            'id_user' => 'required|exists:users,id_user', // Pastikan id_user ada di tabel users
            'nama' => 'nullable|string|max:255',
            'pembiayaan' => 'nullable|string|max:255',
            'no_jkn' => 'nullable|string|max:50',
            'faskes_tk_1' => 'nullable|string|max:255',
            'faskes_rujukan' => 'nullable|string|max:255',
            'gol_darah' => 'nullable|string|max:2',  // 2 karakter untuk gol_darah
            'tmpt_lahir' => 'nullable|string|max:100',
            'tgl_lahir' => 'nullable|date',
            'pendidikan' => 'nullable|string|max:100',
            'pekerjaan' => 'nullable|string|max:100',
            'provinsi' => 'nullable|string|max:100',
            'kabupaten' => 'nullable|string|max:100',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:20',
            'puskesmas_domisili' => 'nullable|string|max:255',
            'no_reg_kohort_ibu' => 'nullable|string|max:50',
        ]);

        // Cari data Ibu berdasarkan ID
        $ibu = Ibu::findOrFail($id);  // Menemukan data berdasarkan ID atau gagal jika tidak ditemukan

        // Update data Ibu dengan data yang sudah divalidasi
        $ibu->update($validated);

        // Redirect atau response sukses
        return redirect()->route('ibu.index')->with('success', 'Data ibu berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = Ibu::findOrFail($id);

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
