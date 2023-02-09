<?php

namespace App\Http\Controllers;

use App\Models\Atributs;
use App\Models\Gejalas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GejalaController extends Controller
{
    public function index()
    {
        // $data = DB::table('gejalas')
        //     ->select('gejalas.nama_gejala')
        //     ->get();
        $atribut = Atributs::where('id_atribut', '!=', 1)->where('id_atribut', '!=', 2)->get();
        // return $datas;
        $data = [];
        foreach ($atribut as $dt) {
            $tmpData = Gejalas::where('id_atribut', $dt->id_atribut)->get();
            $map['atribut'] = $dt;
            $map['gejala'] = $tmpData;
            array_push($data, $map);
        }
        //return $data;

        return view('gejala.index', ['data' => $data], ['datas' => $data]);
    }

    public function create()
    {
        $data = Atributs::where('id_atribut', '!=', 1)->where('id_atribut', '!=', 2)->get();

        return view('gejala.tambah', [
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $data = new \App\Models\Gejalas;
        $data->nama_gejala = $request->input('nama_gejala');
        $data->id_atribut = $request->input('atribut');
        $data->save();

        return redirect()->route('gejala')->with('success', 'Data Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $atribut = Atributs::where('id_atribut', '!=', 1)->where('id_atribut', '!=', 2)->where('id_atribut', $id)->get();
        // return $datas;
        $data = [];
        foreach ($atribut as $dt) {
            $tmpData = Gejalas::where('id_atribut', $dt->id_atribut)->get();
            $map['atribut'] = $dt;
            $map['gejala'] = $tmpData;
            array_push($data, $map);
        }
        //return $data;

        return view('gejala.update', ['data' => $data], ['datas' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = \App\Models\Gejalas::where('id',$id)->first();
        $data->nama_penyakit = $request->input('nama_penyakit'); 
        $data->penjelasan = $request->input('penjelasan');
        $data->save();

        return redirect()->route('penyakit',['id'=>$id])->with('success', 'Data Berhasil diupdate');
    }
}
