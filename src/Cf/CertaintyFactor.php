<?php

namespace afrizalmy\CertaintyFactor\Cf;

use afrizalmy\CertaintyFactor\Tester\TestData;
use afrizalmy\CertaintyFactor\Tester\TestInputData;
use afrizalmy\CertaintyFactor\Cf\Get_case;

class CertaintyFactor
{
    public function TestData()
    {
        $testdata = new TestData();
        return $testdata->testdata();
    }

    public function TestDataInput()
    {
        $testdata = new TestInputData();
        return $testdata->testinput();
    }

    public function ProsesHitung($data, $inputan)
    {
        $case = new Get_case();
        $getcase = $case->data($data);
        // echo count($data);
        $hasil_combine = [];
        
        for ($i=0; $i < count($getcase); $i++) { 
            # code...
            $kombin = [];
            for ($j=0; $j < count($data); $j++) { 
                if ($data[$j]['kode_case'] == $getcase[$i]['kode_case']) {
                    for ($k=0; $k < count($inputan); $k++) { 
                        if ($inputan[$k]['kode_rule'] == $data[$j]['kode_rule']) {
                            // echo $getcase[$i]['nama_case'],'<br>';
                            // echo $inputan[$k]['persentase_user'],'x',$data[$j]['nilai_md'];
                            $hasilkali = $inputan[$k]['persentase_user'] * $data[$j]['nilai_md'];
                            // echo $data[$j]['nama_rule'], '=' , $hasilkali ,'<br><br><br>';
                            array_push($kombin, $hasilkali);
                        }
                    }
                }                
            }
            // echo json_encode($kombin);
            $hasilcombin = 0;
            for ($z=0; $z < count($kombin); $z++) { 
                if ($z == 0) {
                    $hasilcombin = $kombin[$z] + $kombin[$z+1] * (1.0 - $kombin[$z]);
                    // echo $hasilcombin,'<br>';

                    if (count($kombin)-1 == 1 ) {
                        $hasil_combine[$getcase[$i]['nama_case']] = $hasilcombin;
                        break;
                    }
                    # code...
                } else {
                    if ($z+1 == count($kombin)) {
                        $hasil_combine[$getcase[$i]['nama_case']] = $hasilcombin;
                        break;
                    }
                    $hasilcombin = $hasilcombin + $kombin[$z+1] * ( 1.0 - $hasilcombin );
                }
            }
        }

        print_r($hasil_combine);
    }

}