<?php

namespace App\Http\Controllers;

use App\Models\TbULaki;
use Illuminate\Http\Request;

class GrafikTinggiBadanUmurLakiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         if ($request->ajax()) {
            return view('admin.layouts-grafik.main');
        }

        return view('admin.layouts2.template-table');
    }

    public function dataGrafik() {
        $data = TbULaki::select('bulan', 'tahun', 'tb')
            ->where('id_anak', 1)
            ->orderBy('tahun')
            ->orderBy('bulan')
            ->get();

        $labels = [];
        $tbData = [];

        $startYear = null;

        foreach ($data as $item) {
            if ($startYear === null) {
                $startYear = $item->tahun;
            }

            $usiaBulan = ($item->tahun - $startYear) * 12 + $item->bulan;

            if ($usiaBulan == 12) {
                $labels[] = "1 tahun";
            } elseif ($usiaBulan == 24) {
                $labels[] = "2 tahun";
            } else {
                $labels[] = $usiaBulan . " bln";
            }

            $tbData[] = $item->tb;
        }

        $earnings = [
            "labels" => $labels,
            "data" => $tbData
        ];

        if (request()->ajax()) {
            return response()->json($earnings);
        }
    }

    public function grafik() {
        return view('admin.layouts-grafik.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
