<?php

namespace afrizalmy\Tester;

use afrizalmy\Cf\Get_data;

class Test
{
    public function testdata()
    {
        $arr = [];
        $arr[0]['kode_penyakit'] = "P01";
        $arr[0]['nama_penyakit'] = "Anemia Aplastik";
        $arr[0]['kode_gejala'] = "G01";
        $arr[0]['nama_gejala'] = "Terasa lemas diseluruh tubuh";
        $arr[0]['nilai_mb'] = 0.8;
        $arr[0]['nilai_md'] = 0.2;

        $arr[1]['kode_penyakit'] = "P01";
        $arr[1]['nama_penyakit'] = "Anemia Aplastik";
        $arr[1]['kode_gejala'] = "G02";
        $arr[1]['nama_gejala'] = "Merasakan sakit kepala";
        $arr[1]['nilai_mb'] = 0.8;
        $arr[1]['nilai_md'] = 0.1;

        $arr[2]['kode_penyakit'] = "P01";
        $arr[2]['nama_penyakit'] = "Anemia Aplastik";
        $arr[2]['kode_gejala'] = "G04";
        $arr[2]['nama_gejala'] = "Demam";
        $arr[2]['nilai_mb'] = 0.75;
        $arr[2]['nilai_md'] = 0.2;

        $arr[3]['kode_penyakit'] = "P01";
        $arr[3]['nama_penyakit'] = "Anemia Aplastik";
        $arr[3]['kode_gejala'] = "G05";
        $arr[3]['nama_gejala'] = "Keluar darah dari hidung/Mimisan";
        $arr[3]['nilai_mb'] = 0.7;
        $arr[3]['nilai_md'] = 0.2;

        $arr[4]['kode_penyakit'] = "P01";
        $arr[4]['nama_penyakit'] = "Anemia Aplastik";
        $arr[4]['kode_gejala'] = "G09";
        $arr[4]['nama_gejala'] = "Merasakan muntah-muntah/mual";
        $arr[4]['nilai_mb'] = 0.77;
        $arr[4]['nilai_md'] = 0.3;

        $arr[5]['kode_penyakit'] = "P01";
        $arr[5]['nama_penyakit'] = "Anemia Aplastik";
        $arr[5]['kode_gejala'] = "G11";
        $arr[5]['nama_gejala'] = "Nyeri pada ulu hati";
        $arr[5]['nilai_mb'] = 0.8;
        $arr[5]['nilai_md'] = 0.3;

        $arr[6]['kode_penyakit'] = "P01";
        $arr[6]['nama_penyakit'] = "Anemia Aplastik";
        $arr[6]['kode_gejala'] = "G08";
        $arr[6]['nama_gejala'] = "Kulit tampak pucat";
        $arr[6]['nilai_mb'] = 0.65;
        $arr[6]['nilai_md'] = 0.3;

// Anemia Defisiensi Zat besi
        $arr[7]['kode_penyakit'] = "P02";
        $arr[7]['nama_penyakit'] = "Anemia Defisiensi Zat besi";
        $arr[7]['kode_gejala'] = "G01";
        $arr[7]['nama_gejala'] = "Terasa lemas diseluruh tubuh";
        $arr[7]['nilai_mb'] = 0.65;
        $arr[7]['nilai_md'] = 0.2;
        
        $arr[8]['kode_penyakit'] = "P02";
        $arr[8]['nama_penyakit'] = "Anemia Defisiensi Zat besi";
        $arr[8]['kode_gejala'] = "G02";
        $arr[8]['nama_gejala'] = "Merasakan sakit kepala";
        $arr[8]['nilai_mb'] = 0.7;
        $arr[8]['nilai_md'] = 0.2;

        $arr[9]['kode_penyakit'] = "P02";
        $arr[9]['nama_penyakit'] = "Anemia Defisiensi Zat besi";
        $arr[9]['kode_gejala'] = "G03";
        $arr[9]['nama_gejala'] = "Nyeri pada dada";
        $arr[9]['nilai_mb'] = 0.8;
        $arr[9]['nilai_md'] = 0.2;

        $arr[10]['kode_penyakit'] = "P02";
        $arr[10]['nama_penyakit'] = "Anemia Defisiensi Zat besi";
        $arr[10]['kode_gejala'] = "G06";
        $arr[10]['nama_gejala'] = "Kaki dan tangan terasa dingin";
        $arr[10]['nilai_mb'] = 0.65;
        $arr[10]['nilai_md'] = 0.2;

        $arr[11]['kode_penyakit'] = "P02";
        $arr[11]['nama_penyakit'] = "Anemia Defisiensi Zat besi";
        $arr[11]['kode_gejala'] = "G07";
        $arr[11]['nama_gejala'] = "Kesemutan pada kaki";
        $arr[11]['nilai_mb'] = 0.6;
        $arr[11]['nilai_md'] = 0.2;

        $arr[12]['kode_penyakit'] = "P02";
        $arr[12]['nama_penyakit'] = "Anemia Defisiensi Zat besi";
        $arr[12]['kode_gejala'] = "G08";
        $arr[12]['nama_gejala'] = "Kulit tampak pucat";
        $arr[12]['nilai_mb'] = 0.65;
        $arr[12]['nilai_md'] = 0.3;

        $arr[13]['kode_penyakit'] = "P02";
        $arr[13]['nama_penyakit'] = "Anemia Defisiensi Zat besi";
        $arr[13]['kode_gejala'] = "G10";
        $arr[13]['nama_gejala'] = "Nyeri pada panggul hingga ke paha";
        $arr[13]['nilai_mb'] = 0.6;
        $arr[13]['nilai_md'] = 0.3;

// Anemia Kremis/Kronik

        $arr[14]['kode_penyakit'] = "P03";
        $arr[14]['nama_penyakit'] = "Anemia Kremis/Kronik";
        $arr[14]['kode_gejala'] = "G01";
        $arr[14]['nama_gejala'] = "Terasa lemas diseluruh tubuh";
        $arr[14]['nilai_mb'] = 0.6;
        $arr[14]['nilai_md'] = 0.2;

        $arr[15]['kode_penyakit'] = "P03";
        $arr[15]['nama_penyakit'] = "Anemia Kremis/Kronik";
        $arr[15]['kode_gejala'] = "G02";
        $arr[15]['nama_gejala'] = "Merasakan sakit kepala";
        $arr[15]['nilai_mb'] = 0.65;
        $arr[15]['nilai_md'] = 0.2;

        $arr[16]['kode_penyakit'] = "P03";
        $arr[16]['nama_penyakit'] = "Anemia Kremis/Kronik";
        $arr[16]['kode_gejala'] = "G04";
        $arr[16]['nama_gejala'] = "Demam";
        $arr[16]['nilai_mb'] = 0.7;
        $arr[16]['nilai_md'] = 0.3;

        $arr[17]['kode_penyakit'] = "P03";
        $arr[17]['nama_penyakit'] = "Anemia Kremis/Kronik";
        $arr[17]['kode_gejala'] = "G06";
        $arr[17]['nama_gejala'] = "Kaki dan tangan terasa dingin";
        $arr[17]['nilai_mb'] = 0.7;
        $arr[17]['nilai_md'] = 0.25;

        $arr[18]['kode_penyakit'] = "P03";
        $arr[18]['nama_penyakit'] = "Anemia Kremis/Kronik";
        $arr[18]['kode_gejala'] = "G09";
        $arr[18]['nama_gejala'] = "Merasakan muntah-muntah/mual";
        $arr[18]['nilai_mb'] = 0.7;
        $arr[18]['nilai_md'] = 0.2;

        $arr[19]['kode_penyakit'] = "P03";
        $arr[19]['nama_penyakit'] = "Anemia Kremis/Kronik";
        $arr[19]['kode_gejala'] = "G10";
        $arr[19]['nama_gejala'] = "Nyeri pada panggul hingga ke paha";
        $arr[19]['nilai_mb'] = 0.65;
        $arr[19]['nilai_md'] = 0.1;

        $arr[20]['kode_penyakit'] = "P03";
        $arr[20]['nama_penyakit'] = "Anemia Kremis/Kronik";
        $arr[20]['kode_gejala'] = "G11";
        $arr[20]['nama_gejala'] = "Nyeri pada ulu hati";
        $arr[20]['nilai_mb'] = 0.8;
        $arr[20]['nilai_md'] = 0.1;

        $arr[21]['kode_penyakit'] = "P03";
        $arr[21]['nama_penyakit'] = "Anemia Kremis/Kronik";
        $arr[21]['kode_gejala'] = "G12";
        $arr[21]['nama_gejala'] = "BAB mengeluarkan darah";
        $arr[21]['nilai_mb'] = 0.85;
        $arr[21]['nilai_md'] = 0.1;

        $dtdata = new Get_data();
        $dtdata->data($arr);
        $dtdata->printdata();
        // return $greet;
    }
}