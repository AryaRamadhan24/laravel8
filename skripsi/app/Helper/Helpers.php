<?php

use App\Models\Knowledge;
class Helpers
{
    public static function groupingResponse($items)
    {
        $tmpData = [];
        foreach ($items as $key => $value) {
            $tmpGejala = [];
            if(in_array($value->atribut_id,  array_column($tmpData, 'id_atribut'))){
                $index = array_search($value->atribut_id, array_column($tmpData, 'id_atribut'));
                array_push($tmpData[$index]['id_gejala'],strval($value->gejala_id));
              
            }else{
                array_push($tmpGejala,strval($value->gejala_id));
                $tmp = ([
                    'id_atribut' => strval($value->atribut_id),
                    'different_simmilarity' => $value->different_simmilarity,
                    'same_simmilarity' => $value->same_simmilarity,
                    'bobot' => $value->bobot,
                    'id_gejala' => $tmpGejala,
                ]);
                array_push($tmpData, $tmp);
            }
           
        }
        
        return $tmpData;
    }

    public static function groupingComparation($items)
    {
        $tmpData = [];
        foreach ($items as $key => $value) {
            $tmpGejala = [];
            if(in_array($value->atribut_id,  array_column($tmpData, 'id_atribut'))){
                $index = array_search($value->atribut_id, array_column($tmpData, 'id_atribut'));
                array_push($tmpData[$index]['id_gejala'],strval($value->gejala_id));
              
            }else{
                array_push($tmpGejala,strval($value->gejala_id));
                $tmp = ([
                    'id_atribut' => strval($value->atribut_id),
                    'id_gejala' => $tmpGejala,
                ]);
                array_push($tmpData, $tmp);
            }
           
        }
        
        return $tmpData;
    }

    public static function groupingRequest($atribut,$value)
    {
        $tmpData = [];
        for ($i=0; $i < count($atribut); $i++) { 
            $it = $i+1;
            $tmp = ([
                'id_atribut' => $atribut[$i],
                'id_gejala' => $value[$i+1],
            ]);
            array_push($tmpData, $tmp);
        }
        return $tmpData;
    }

    public function generateKnowledgeCode()
    {
         $knwdlg = Knowledge::latest('id')->first();
        $kode = 0;
        if ($knwdlg) {
            $last = $knwdlg->id + 1;
            $kode = 'KN' . str_pad($last, 3, 0, STR_PAD_LEFT);
        } else {
            $kode = 'KN001';
        }
        return $kode;
    }
    public static function compare($reff, $new, $master)
    {
        $simmilarity = 0;
        $bobot = 0;
        $tmpReff = $reff;
        $tmpnew = $new;
        for ($i=0; $i < count($reff); $i++) { 
            $tmp = 0;
            $comparation = array_diff($reff[$i]['id_gejala'],$new[$i]['id_gejala']); // mencari perbedaan dari gejala yg dimasukkan
            if (count($comparation) > 0) {
                $tmp = $master[$i]['different_simmilarity'] * $master[$i]['bobot']; // perhitungan jika gejala berbeda
            }else{
                $tmp = floatval($master[$i]['same_simmilarity']) * floatval($master[$i]['bobot']); // perhitungan jika gejala sama
            }
            $simmilarity += $tmp; // perhitungan total simmilarity
            $bobot += $master[$i]['bobot']; // perhitungan total bobot
        }
        
        $valueSImmilarity = floatval($simmilarity) / floatval($bobot) * 100; // perhitungan nilai simmilarity pada kasus yg dibandingnkan
        return ([
            'total_bobot' => $bobot,
            'simmilarity' => $simmilarity,
            'value_simm' =>($simmilarity/$bobot) *100
        ]);
    }
}
?>