<?php

namespace App\Http\Controllers;

use App\Models\Atributs;
use App\Models\Gejalas;
use App\Models\Knowledge;
use App\Models\KnowledgeDetail;
use Illuminate\Http\Request;
use Helpers;

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
        // Proses perhitungan CBR
        // $data = Knowledge::first();
        // $detail = KnowledgeDetail::join('atributs', 'atributs.id_atribut', 'knowledge_details.atribut_id')
        // ->select('knowledge_details.*', 'atributs.different_simmilarity', 'atributs.same_simmilarity','atributs.bobot')
        // ->where('knowledge_details.knowledge_id', $data->id)->get();
        
        // $reff =(array) Helpers::groupingResponse($detail);
        // $pembanding =(array) Helpers::groupingComparation($detail);
        // $new =(array) Helpers::groupingRequest($request->id_atribut, $request->gejala);
        // $hasil = Helpers::compare($pembanding, $new, $reff); // hasil perbandingan nilai simmilarity dengan membandingkan data baru dengan kasus yg ada
        
        
        $kode = Helpers::generateKnowledgeCode();
        $ite = [];
      
        try {
            $knowledge = Knowledge::create([
                'knowledge_code' => $kode,
                'total_bobot' => 0,
                'total_similarity' => 0
            ]);
            for ($i=0; $i < count($request->gejala); $i++) { 
                for ($x=0; $x < count($request->gejala[$i+1]); $x++) { 
                    // array_push($ite, $request->gejala[$i+1][$x]);
                    KnowledgeDetail::create([
                        'knowledge_id' => $knowledge->id,
                        'atribut_id' => $request->id_atribut[$i],
                        'gejala_id' => $request->gejala[$i+1][$x],
                    ]);
                }
            }
            for ($i=0; $i < count($request->gejala); $i++) { 
               
            }
           return redirect('diagnosa');
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
       
        // return $tmpData;
    }
}
