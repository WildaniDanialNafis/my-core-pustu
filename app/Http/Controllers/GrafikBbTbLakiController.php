<?php

namespace App\Http\Controllers;

use App\Models\BbTbLaki;
use App\Models\TbULaki;
use Illuminate\Http\Request;

class GrafikBbTbLakiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BbTbLaki::select('bb', 'tb')
            ->where('id_anak', 1)
            ->orderBy('tb')
            ->get();

        $labels = [];
        $bbData = [];

        foreach ($data as $item) {
            $labels[] = $item->tb . ' cm';
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
