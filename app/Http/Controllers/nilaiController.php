<?php

namespace App\Http\Controllers;

use App\Models\nilaiModel;
use Illuminate\Http\Request;

class nilaiController extends Controller
{
    public function index()
    {
        $nilai = nilaiModel::all();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        return view('nilai.create');
    }

    public function store(Request $request)
    {
        $nilai = new nilaiModel;
        $nilai->IPK = $request->IPK;
        $nilai->Jumlah_SKS = $request->Jumlah_SKS;
        $nilai->kehadiran = $request->kehadiran;
        $nilai->kelulusan = $request->kelulusan;
        $nilai->save();
        return redirect('example');
    }   
}
