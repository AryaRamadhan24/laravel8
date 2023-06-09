<?php

namespace App\Http\Controllers;

use App\Models\Atributs;
use App\Models\Gejalas;
use App\Models\Penyakit;
use App\Models\Knowledge;
use App\Models\KnowledgeDetail;
use App\Models\Solusi;
use Illuminate\Http\Request;
use Helpers;

class DiagnosaController extends Controller
{
    public function index()
    {
        $data = [];
        $desease = Penyakit::all();
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
<<<<<<< Updated upstream
        return view('diagnosa.index', compact('data', 'desease'));
=======
        
        return view('diagnosa.index', compact('data'),);
>>>>>>> Stashed changes
    }

    public function store(Request $request)
    {

        try {
            // Proses perhitungan CBR

            $data = Knowledge::where('type', 'master')->get();
            $diagnose = [];
            foreach ($data as $dt) {
                $detail = KnowledgeDetail::join('atributs', 'atributs.id_atribut', 'knowledge_details.atribut_id')
                    ->select('knowledge_details.*', 'atributs.different_simmilarity', 'atributs.same_simmilarity', 'atributs.bobot')
                    ->where('knowledge_details.knowledge_id', $dt->id)->get();

                $reff = (array) Helpers::groupingResponse($detail);
                $pembanding = (array) Helpers::groupingComparation($detail);
                $new = (array) Helpers::groupingRequest($request->id_atribut, $request->gejala);
                $hasil = Helpers::compare($pembanding, $new, $reff); // hasil perbandingan nilai simmilarity dengan membandingkan data baru dengan kasus yg ada
                $hasil['knowledge_code'] = $dt->knowledge_code;
                array_push($diagnose, $hasil);
            }
            usort($diagnose, function ($a, $b) {
                return strcmp($b['value_simm'], $a['value_simm']);
            });
            $val = '';
            foreach ($data as $value) {
                if ($value->knowledge_code == $diagnose[0]['knowledge_code']) {
                    $val = $value->penyakit_id;
                }
            }

            $kode = Helpers::generateKnowledgeCode();
            $knowledge = Knowledge::create([
                'knowledge_code' => $kode,
                'total_bobot' => $diagnose[0]['total_bobot'],
                'total_similarity' => $diagnose[0]['value_simm'],
                'penyakit_id' => $val,
                'type' => 'data',
            ]);

            for ($i = 0; $i < count($request->gejala); $i++) {
                for ($x = 0; $x < count($request->gejala[$i + 1]); $x++) {
                    KnowledgeDetail::create([
                        'knowledge_id' => $knowledge->id,
                        'atribut_id' => $request->id_atribut[$i],
                        'gejala_id' => $request->gejala[$i + 1][$x],
                    ]);
                }
            }
            $dataPenyakit = Penyakit::where('id', $val)->first();
            $solusi = Solusi::where('penyakit_id', $val)->get();
            $response['penyakit'] = $dataPenyakit;
            $response['solusi'] = $solusi;

            $atribut = Atributs::all();
            $kondisi = Gejalas::all();
            // menampilkan hasil inputan user
            $inputan = [];
            for ($i = 0; $i < count($request->gejala); $i++) {
                $tmpInput = [];
                foreach ($atribut as $val) {
                    if ($val->id_atribut == $request->id_atribut[$i]) {
                        $tmpInput['atribut'] = $val->nama_atribut;
                    }
                }
                $tmpInput['kondisi'] = [];
                for ($x = 0; $x < count($request->gejala[$i + 1]); $x++) {
                    foreach ($kondisi as $value) {
                        if ($value->id_gejala == $request->gejala[$i + 1][$x]) {
                            array_push($tmpInput['kondisi'], $value->nama_gejala);
                        }
                    }
                }
                array_push($inputan, $tmpInput);
            }
            // return $response;
            return view('diagnosa.result', compact('response', 'inputan'));
            // return redirect('diagnosa', );
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }

        // return $tmpData;
    }
}
