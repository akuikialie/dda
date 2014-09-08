<?php

class Sepatu {

    public $apakahBau;
    private $maxPakai = 3;

    public function apakahBau() {
        $this->apakahBau = 'Tidak';
    }
}


$s = new Sepatu();
echo "Apakah bau? ".$s->apakahBau;
/*$s->pakai();
$s->hujan();
$s->apakahBau();
$s->pakai();
$s->apakahBau();
$s->cuci();
$s->apakahBau();*/
