<?php

namespace afrizalmy\CertaintyFactor\Cf;

use afrizalmy\CertaintyFactor\Tester\TestData;
use afrizalmy\CertaintyFactor\Tester\TestInputData;
use afrizalmy\CertaintyFactor\Cf\Get_case;
use afrizalmy\CertaintyFactor\ErrorHandling\HandleError;

class CertaintyFactor
{
    public static function TestData()
    {
        $testdata = new TestData();
        return $testdata->testdata();
    }

    public static function TestDataInput()
    {
        $testdata = new TestInputData();
        return $testdata->testinput();
    }

    public static function ProsesHitung($data, $inputan)
    {
        $case = new Get_case();
        $getcase = $case->data($data);
        $hasil_combine = [];
        
        for ($i=0; $i < count($getcase); $i++) { 
            # code...
            $kombin = [];
            for ($j=0; $j < count($data); $j++) { 
                if ($data[$j]['kode_case'] == $getcase[$i]['kode_case']) {
                    for ($k=0; $k < count($inputan); $k++) { 
                        HandleError::HandleInput($inputan[$k]);
                        if ($inputan[$k]['kode_rule'] == $data[$j]['kode_rule']) {
                            $hasilkali = $inputan[$k]['persentase_user'] * $data[$j]['nilai_md'];
                            array_push($kombin, $hasilkali);
                        }
                    }
                }                
            }
            $hasilcombin = 0;
            for ($z=0; $z < count($kombin); $z++) { 
                if ($z == 0) {
                    $hasilcombin = $kombin[$z] + $kombin[$z+1] * (1.0 - $kombin[$z]);

                    if (count($kombin)-1 == 1 ) {
                        $hasil_combine[$i]["kode_case"] = $getcase[$i]['kode_case'];
                        $hasil_combine[$i]["nama_case"] = $getcase[$i]['nama_case'];
                        $hasil_combine[$i]["hasil_perhitungan"] = $hasilcombin;
                        break;
                    }
                } else {
                    if ($z+1 == count($kombin)) {
                        $hasil_combine[$i]["kode_case"] = $getcase[$i]['kode_case'];
                        $hasil_combine[$i]["nama_case"] = $getcase[$i]['nama_case'];
                        $hasil_combine[$i]["hasil_perhitungan"] = $hasilcombin;
                        break;
                    }
                    $hasilcombin = $hasilcombin + $kombin[$z+1] * ( 1.0 - $hasilcombin );
                }
            }
        }
        $penentuan = [];
        $tmp= 0;
        for ($i=0; $i < count($hasil_combine); $i++) { 
            if ($tmp < $hasil_combine[$i]['hasil_perhitungan']) {
                # code...
                $obj = (object) [
                    'kode_case' => $hasil_combine[$i]['kode_case'],
                    'nama_case' => $hasil_combine[$i]['nama_case'],
                    'hasil_perhitungan' => $hasil_combine[$i]['hasil_perhitungan']
                ];
                $tmp = $hasil_combine[$i]['hasil_perhitungan'];
            }
        }
        $hasilakhir = (object) [
            'list_case' => $hasil_combine,
            'hasil_pakar' => $obj
        ];

        return $hasilakhir;
        // echo json_encode($hasilakhir);
    }

}