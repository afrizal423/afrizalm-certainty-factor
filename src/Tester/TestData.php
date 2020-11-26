<?php

namespace afrizalmy\CertaintyFactor\Tester;

class TestData
{
    public function testdata()
    {
        $arr = [];
        $arr[0]['kode_case'] = "P01";
        $arr[0]['nama_case'] = "Anemia Aplastik";
        $arr[0]['kode_rule'] = "G01";
        $arr[0]['nama_rule'] = "Terasa lemas diseluruh tubuh";
        $arr[0]['nilai_mb'] = 0.8;
        $arr[0]['nilai_md'] = 0.2;

        $arr[1]['kode_case'] = "P01";
        $arr[1]['nama_case'] = "Anemia Aplastik";
        $arr[1]['kode_rule'] = "G02";
        $arr[1]['nama_rule'] = "Merasakan sakit kepala";
        $arr[1]['nilai_mb'] = 0.8;
        $arr[1]['nilai_md'] = 0.1;

        $arr[2]['kode_case'] = "P01";
        $arr[2]['nama_case'] = "Anemia Aplastik";
        $arr[2]['kode_rule'] = "G04";
        $arr[2]['nama_rule'] = "Demam";
        $arr[2]['nilai_mb'] = 0.75;
        $arr[2]['nilai_md'] = 0.2;

        $arr[3]['kode_case'] = "P01";
        $arr[3]['nama_case'] = "Anemia Aplastik";
        $arr[3]['kode_rule'] = "G05";
        $arr[3]['nama_rule'] = "Keluar darah dari hidung/Mimisan";
        $arr[3]['nilai_mb'] = 0.7;
        $arr[3]['nilai_md'] = 0.2;

        $arr[4]['kode_case'] = "P01";
        $arr[4]['nama_case'] = "Anemia Aplastik";
        $arr[4]['kode_rule'] = "G09";
        $arr[4]['nama_rule'] = "Merasakan muntah-muntah/mual";
        $arr[4]['nilai_mb'] = 0.77;
        $arr[4]['nilai_md'] = 0.3;

        $arr[5]['kode_case'] = "P01";
        $arr[5]['nama_case'] = "Anemia Aplastik";
        $arr[5]['kode_rule'] = "G11";
        $arr[5]['nama_rule'] = "Nyeri pada ulu hati";
        $arr[5]['nilai_mb'] = 0.8;
        $arr[5]['nilai_md'] = 0.3;

        $arr[6]['kode_case'] = "P01";
        $arr[6]['nama_case'] = "Anemia Aplastik";
        $arr[6]['kode_rule'] = "G08";
        $arr[6]['nama_rule'] = "Kulit tampak pucat";
        $arr[6]['nilai_mb'] = 0.65;
        $arr[6]['nilai_md'] = 0.3;

// Anemia Defisiensi Zat besi
        $arr[7]['kode_case'] = "P02";
        $arr[7]['nama_case'] = "Anemia Defisiensi Zat besi";
        $arr[7]['kode_rule'] = "G01";
        $arr[7]['nama_rule'] = "Terasa lemas diseluruh tubuh";
        $arr[7]['nilai_mb'] = 0.65;
        $arr[7]['nilai_md'] = 0.2;
        
        $arr[8]['kode_case'] = "P02";
        $arr[8]['nama_case'] = "Anemia Defisiensi Zat besi";
        $arr[8]['kode_rule'] = "G02";
        $arr[8]['nama_rule'] = "Merasakan sakit kepala";
        $arr[8]['nilai_mb'] = 0.7;
        $arr[8]['nilai_md'] = 0.2;

        $arr[9]['kode_case'] = "P02";
        $arr[9]['nama_case'] = "Anemia Defisiensi Zat besi";
        $arr[9]['kode_rule'] = "G03";
        $arr[9]['nama_rule'] = "Nyeri pada dada";
        $arr[9]['nilai_mb'] = 0.8;
        $arr[9]['nilai_md'] = 0.2;

        $arr[10]['kode_case'] = "P02";
        $arr[10]['nama_case'] = "Anemia Defisiensi Zat besi";
        $arr[10]['kode_rule'] = "G06";
        $arr[10]['nama_rule'] = "Kaki dan tangan terasa dingin";
        $arr[10]['nilai_mb'] = 0.65;
        $arr[10]['nilai_md'] = 0.2;

        $arr[11]['kode_case'] = "P02";
        $arr[11]['nama_case'] = "Anemia Defisiensi Zat besi";
        $arr[11]['kode_rule'] = "G07";
        $arr[11]['nama_rule'] = "Kesemutan pada kaki";
        $arr[11]['nilai_mb'] = 0.6;
        $arr[11]['nilai_md'] = 0.2;

        $arr[12]['kode_case'] = "P02";
        $arr[12]['nama_case'] = "Anemia Defisiensi Zat besi";
        $arr[12]['kode_rule'] = "G08";
        $arr[12]['nama_rule'] = "Kulit tampak pucat";
        $arr[12]['nilai_mb'] = 0.65;
        $arr[12]['nilai_md'] = 0.3;

        $arr[13]['kode_case'] = "P02";
        $arr[13]['nama_case'] = "Anemia Defisiensi Zat besi";
        $arr[13]['kode_rule'] = "G10";
        $arr[13]['nama_rule'] = "Nyeri pada panggul hingga ke paha";
        $arr[13]['nilai_mb'] = 0.6;
        $arr[13]['nilai_md'] = 0.3;

// Anemia Kremis/Kronik

        $arr[14]['kode_case'] = "P03";
        $arr[14]['nama_case'] = "Anemia Kremis/Kronik";
        $arr[14]['kode_rule'] = "G01";
        $arr[14]['nama_rule'] = "Terasa lemas diseluruh tubuh";
        $arr[14]['nilai_mb'] = 0.6;
        $arr[14]['nilai_md'] = 0.2;

        $arr[15]['kode_case'] = "P03";
        $arr[15]['nama_case'] = "Anemia Kremis/Kronik";
        $arr[15]['kode_rule'] = "G02";
        $arr[15]['nama_rule'] = "Merasakan sakit kepala";
        $arr[15]['nilai_mb'] = 0.65;
        $arr[15]['nilai_md'] = 0.2;

        $arr[16]['kode_case'] = "P03";
        $arr[16]['nama_case'] = "Anemia Kremis/Kronik";
        $arr[16]['kode_rule'] = "G04";
        $arr[16]['nama_rule'] = "Demam";
        $arr[16]['nilai_mb'] = 0.7;
        $arr[16]['nilai_md'] = 0.3;

        $arr[17]['kode_case'] = "P03";
        $arr[17]['nama_case'] = "Anemia Kremis/Kronik";
        $arr[17]['kode_rule'] = "G06";
        $arr[17]['nama_rule'] = "Kaki dan tangan terasa dingin";
        $arr[17]['nilai_mb'] = 0.7;
        $arr[17]['nilai_md'] = 0.25;

        $arr[18]['kode_case'] = "P03";
        $arr[18]['nama_case'] = "Anemia Kremis/Kronik";
        $arr[18]['kode_rule'] = "G09";
        $arr[18]['nama_rule'] = "Merasakan muntah-muntah/mual";
        $arr[18]['nilai_mb'] = 0.7;
        $arr[18]['nilai_md'] = 0.2;

        $arr[19]['kode_case'] = "P03";
        $arr[19]['nama_case'] = "Anemia Kremis/Kronik";
        $arr[19]['kode_rule'] = "G10";
        $arr[19]['nama_rule'] = "Nyeri pada panggul hingga ke paha";
        $arr[19]['nilai_mb'] = 0.65;
        $arr[19]['nilai_md'] = 0.1;

        $arr[20]['kode_case'] = "P03";
        $arr[20]['nama_case'] = "Anemia Kremis/Kronik";
        $arr[20]['kode_rule'] = "G11";
        $arr[20]['nama_rule'] = "Nyeri pada ulu hati";
        $arr[20]['nilai_mb'] = 0.8;
        $arr[20]['nilai_md'] = 0.1;

        $arr[21]['kode_case'] = "P03";
        $arr[21]['nama_case'] = "Anemia Kremis/Kronik";
        $arr[21]['kode_rule'] = "G12";
        $arr[21]['nama_rule'] = "BAB mengeluarkan darah";
        $arr[21]['nilai_mb'] = 0.85;
        $arr[21]['nilai_md'] = 0.1;

        return $arr;
        // return $greet;
    }
}