<?php

namespace App\Http\Controllers;

use App\Models\BbUPerempuan;
use Illuminate\Http\Request;

class GrafikBbUPrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BbUPerempuan::select('bulan', 'tahun', 'bb')
            ->where('id_anak', 1)
            ->orderBy('tahun')
            ->orderBy('bulan')
            ->get();

        $labels = [];
        $bbData = [];

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

            $bbData[] = $item->bb;
        }

        $graph = [
            "labels" => $labels,
            "data" => $bbData
        ];

        return view('admin.layouts2.template-table', [
            'earnings' => $graph
        ]);
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
