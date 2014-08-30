<?php

class Air {

    public $asal;
    public $banyak;
    public $tempat;
    public $apakahBersih;
    public $apakahBisaDiMinum;

    public function bisaDiMinum()
    {
        echo "Minum Aja";
        $this->apakahBisaDiMinum = "ya";
    }

    public function apakahBersih()
    {
        echo "Sudah Bersih";
        $this->apakahBersih = "ya";
    }

    public function setAsal($asal)
    {
        $this->asal;
    }

    public function setBanyak($banyak)
    {
        $this->banyak;
    }

    public function setTempat($tempat)
    {
        $this->tempat;
    }

}
