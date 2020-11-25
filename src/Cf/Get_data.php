<?php

namespace afrizalmy\CertaintyFactor\Cf;

class Get_data
{
    /**
     * @var array
     */
    private $dt = [];

    /**
     * @var array
     */
    private $dt_pretty = [];
    private $penyakit = [];

    public function data(array $sempeldata)
    {
        $tmp = [];
        for ($i=0; $i < count($sempeldata) ; $i++) { 
            # code...
            $tmp['kode_penyakit'] = $sempeldata[$i]['kode_penyakit'];
            $tmp['indeks'] = $i;
            array_push($this->penyakit, $tmp);
            array_push($this->dt, $sempeldata[$i]);
        }
        // $this->dt = array_merge($this->dt, $sempeldata);
    }

    function contains($string){
        for ($i=0; $i < count($this->penyakit); $i++) { 
            # code...
        }
    }

    public function printdata()
    {
        header('Content-Type: application/json');
        echo json_encode($this->dt);
    }
    
}
