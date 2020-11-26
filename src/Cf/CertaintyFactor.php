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
        for ($i=0; $i < count($getcase); $i++) { 
            # code...
            for ($j=0; $j < count($data); $j++) { 
                if ($data[$j]['kode_case'] == $getcase[$i]['kode_case']) {
                    for ($k=0; $k < count($inputan); $k++) { 
                        if ($inputan[$k]['kode_rule'] == $data[$j]['kode_rule']) {
                            echo $getcase[$i]['nama_case'],'<br>';
                            echo $data[$j]['nilai_md'],'<br><br><br>';
                        }
                    }
                }                
            }
            // echo $getcase[$i]['kode_case'];
        }
    }

}