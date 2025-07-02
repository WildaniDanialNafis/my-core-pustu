<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakFormController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return view('admin.layouts2.cetak-form');
        }

        return view('admin.layouts2.template-table');
    }
}
