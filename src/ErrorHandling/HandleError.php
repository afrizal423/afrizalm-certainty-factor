<?php

namespace afrizalmy\CertaintyFactor\ErrorHandling;

class HandleError
{
    public static function HandleData($data)
    {
        if (!$data['kode_case']) {
            throw new \InvalidArgumentException('Kode Case HARUS TERISI !!!!!');
        }
        if (!$data['nama_case']) {
            throw new \InvalidArgumentException('nama_case HARUS TERISI !!!!!');
        }
        if (!$data['kode_rule']) {
            throw new \InvalidArgumentException('kode_rule HARUS TERISI !!!!!');
        }
        if (!$data['nama_rule']) {
            throw new \InvalidArgumentException('nama_rule HARUS TERISI !!!!!');
        }
        if (!$data['nilai_md']) {
            throw new \InvalidArgumentException('nilai_md HARUS TERISI !!!!!');
        }
    }

    public static function HandleInput($data)
    {
        if (!$data['kode_rule']) {
            throw new \InvalidArgumentException('kode_rule HARUS TERISI !!!!!');
        }
        if (!$data['persentase_user']) {
            throw new \InvalidArgumentException('persentase_user HARUS TERISI !!!!!');
        }
    }
}
