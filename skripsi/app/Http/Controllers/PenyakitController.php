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
            ->get();

        return view('penyakit.index', ['data' => $data]);
    }

    public function create()
    {
        return view('penyakit.tambah');
    }

    public function store(Request $request)
    {
        $data = new \App\Models\Penyakit;
        $data->nama_penyakit = $request->input('nama_penyakit');
        $data->penjelasan = $request->input('penjelasan');
        $data->save();

        return redirect()->route('penyakit')->with('success', 'Data Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = DB::table('penyakits')
            ->where('id', $id)
            ->first();
        
        return view('penyakit.update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = \App\Models\Penyakit::where('id',$id)->first();
        $data->nama_penyakit = $request->input('nama_penyakit'); 
        $data->penjelasan = $request->input('penjelasan');
        $data->save();

        return redirect()->route('penyakit',['id'=>$id])->with('success', 'Data Berhasil diupdate');
    }

    public function destroy($id)
    {
        Penyakit::where('id', $id)->delete();

        return redirect()->route('penyakit');
    }
    
}
