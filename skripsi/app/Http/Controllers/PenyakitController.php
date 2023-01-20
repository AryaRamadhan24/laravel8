<?php

namespace App\Http\Controllers;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenyakitController extends Controller
{
    public function index()
    {
        $data = DB::table('penyakits')
        ->select('penyakits.nama_penyakit','penyakits.penjelasan')
        ->get();

        return view('penyakit.index', ['data' => $data]);
    }

    public function create()
    {
        return view('penyakit.tambah');
    }

    public function store(Request $request)
    {
        $data=new \App\Models\Penyakit;
        $data->nama_penyakit = $request->input('nama_penyakit');
        $data->penjelasan = $request->input('penjelasan');
        $data->save();

        return redirect()->route('penyakit')->with('success','Data Berhasil ditambahkan');
    }
}
