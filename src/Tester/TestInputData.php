<?php

namespace afrizalmy\CertaintyFactor\Tester;


class TestInputData
{
    public function testinput()
    {
        $arr = [];
        $arr[0]['kode_rule'] = "G01";
        $arr[0]['persentase_user'] = 0.8;

        $arr[1]['kode_rule'] = "G02";
        $arr[1]['persentase_user'] = 0.5;

        $arr[2]['kode_rule'] = "G03";
        $arr[2]['persentase_user'] = 0.6;

        $arr[3]['kode_rule'] = "G08";
        $arr[3]['persentase_user'] = 0.4;

        return $arr;
        // echo json_encode($arr);
    }
}