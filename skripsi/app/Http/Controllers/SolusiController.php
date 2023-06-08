<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use App\Models\Solusi;
use Illuminate\Http\Request;

class SolusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Solusi::join('penyakits', 'penyakits.id', 'solusi.penyakit_id')
            ->select('solusi.*', 'penyakits.nama_penyakit')
            ->get();

        return view('solusi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Penyakit::all();
        return view('solusi.tambah', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'penyakit_id' => 'required',
            'solusi' => 'required',
        ]);

        try {
            for ($i = 0; $i < count($request->solusi); $i++) {
                Solusi::create([
                    'penyakit_id' => $request->penyakit_id,
                    'deskripsi_solusi' => $request->solusi[$i],
                ]);
            }
            return redirect('/solusi');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function show(Solusi $solusi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function edit(Solusi $solusi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solusi $solusi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solusi $solusi)
    {
        Solusi::where('id', $solusi->id)->delete();
        return redirect('/solusi');
    }
}
