<?php

namespace afrizalmy\CertaintyFactor\Cf;

class Get_case
{
    /**
     * @var array
     */
    private $dt = [];

    /**
     * @var array
     */
    private $dt_pretty = [];
    private $case = [];

    public function data(array $sempeldata)
    {
        $tmp = [];
        for ($i=0; $i < count($sempeldata) ; $i++) { 
            # code...
            $tmp['kode_case'] = $sempeldata[$i]['kode_case'];
            $tmp['nama_case'] = $sempeldata[$i]['nama_case'];
            $tmp['indeks'] = $i;
            if (!$this->contains($sempeldata[$i]['kode_case'])) {
                array_push($this->case, $tmp);
            }
            array_push($this->dt, $sempeldata[$i]);
        }
        // header('Content-Type: application/json');
        // echo json_encode($this->case);
        // $this->dt = array_merge($this->dt, $sempeldata);
        return $this->case;
    }

    function contains($string){
        for ($i=0; $i < count($this->case); $i++) { 
            if ($string == $this->case[$i]['kode_case']) {
                return true;
                
            }
        }
    }

    public function printdata()
    {
        header('Content-Type: application/json');
        echo json_encode($this->case);
    }
    
}
