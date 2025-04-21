<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.pages.tables', []);
    }

    public function getUsers(Request $request)
    {
        return DataTables::of(User::query()->orderBy('id', 'desc'))->toJson();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cek data yang dikirimkan
        // dd($request->all()); // Untuk memeriksa apakah data terkirim dengan benar

        // Validasi dengan aturan longgar
        $validated = $request->validate([
            'name' => 'required|string|max:255',  // Nama harus ada dan string
            'email' => 'required|email',          // Email harus ada dan dalam format email
            'password' => 'required|min:6',       // Password minimal 6 karakter
            'id_role' => 'required',              // id_role tidak divalidasi lebih lanjut
        ]);

        // Jika data valid, lanjutkan untuk membuat user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'id_role' => $validated['id_role'],
        ]);

        // Kembalikan respons jika berhasil
        return redirect()->route('tables.create')->with('success', 'User berhasil ditambahkan!');
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
        $user = User::findOrFail($id);
        return response()->json(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'id_role' => 'required',  // Validasi id_role sesuai dengan role yang ada
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_role = $request->id_role;

        // Jika password diisi, update password
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('tables.create')->with('success', 'User berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan user berdasarkan ID
        $user = User::findOrFail($id);

        // Hapus user
        $user->delete();

        // Response sukses
        return response()->json(['success' => 'User berhasil dihapus!']);
    }
}
