<?php

namespace App\Http\Controllers;

use App\Models\ImtPerempuan;
use Illuminate\Http\Request;

class GrafikImtPrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ImtPerempuan::select('imt', 'bulan')
            ->where('id_anak', 1)
            ->orderBy('bulan')
            ->get();

        $labels = [];
        $imtData = [];

        foreach ($data as $item) {
            $labels[] = $item->bulan . ' bln';
            $imtData[] = $item->imt;
        }

        $graph = [
            "labels" => $labels,
            "data" => $imtData
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
