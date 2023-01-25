<?php

namespace App\Http\Controllers;

use App\Models\Atributs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GejalaController extends Controller
{
    public function index()
    {
        $data = DB::table('gejalas')
        ->select('gejalas.nama_gejala')
        ->get();

        return view('gejala.index', ['data' => $data]);
    }

    public function create()
    {
        $data = Atributs::where('id_atribut','!=',1)->where('id_atribut','!=',2)->get();

        return view('gejala.tambah', [
            'data'=> $data,
        ]);
    }

    public function store(Request $request)
    {
        $data=new \App\Models\Gejalas;
        $data->nama_gejala = $request->input('nama_gejala');
        $data->id_atribut = $request->input('atribut');
        $data->save();

        return redirect()->route('gejala')->with('success','Data Berhasil ditambahkan');
    }
}
