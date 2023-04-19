<?php

namespace App\Http\Controllers;

use App\Models\Atributs;
use App\Models\Gejalas;
use App\Models\Knowledge;
use App\Models\KnowledgeDetail;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index()
    {
        $data = [];
        $attr = Atributs::all();
        foreach ($attr as $value) {
            // $dt = Gejalas::where('id_atribut', $value->id_atribut)->get();
            $push = ([
                'atrribut' => $value,
                'gejala' => Gejalas::where('id_atribut', $value->id_atribut)->get(),
            ]);
            array_push($data, $push);
        }
        // return $data;
        return view('diagnosa.index', compact('data'));
    }

    public function store(Request $request)
    {
        $knwdlg = Knowledge::latest('id')->first();
        $kode = 0;
        if ($knwdlg) {
            $last = $knwdlg->id + 1;
            $kode = 'KN' . str_pad($last, 3, 0, STR_PAD_LEFT);
        } else {
            $kode = 'KN001';
        }
        try {
            $knowledge = Knowledge::create([
                'knowledge_code' => $kode,
                'total_bobot' => 0,
                'total_similarity' => 0
            ]);
            for ($i=0; $i < count($request->id_atribut); $i++) { 
                KnowledgeDetail::create([
                    'knowledge_id' => $knowledge->id,
                    'atribut_id' => $request->id_atribut[$i],
                    'gejala_id' => $request->gejala[$i],
                ]);
            }
           return redirect('diagnosa');
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
        return $request;
    }
}
