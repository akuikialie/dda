<?php

class Galon {

    public $adaGalon;
    private $jumlahAir = 4;
    private $totalAir;

    public function diMinum($minum)
    {
        if ($this->totalAir < 0) {
            echo "Maaf air Galon sudah habis<br>";
        } else {
            $this->jumlahAir = $this->jumlahAir - (float) $minum;

            $this->totalAir = $this->adaGalon * $this->jumlahAir;
            echo " Air galon tersisa : " . $this->totalAir . "<br>";
        }
    }

    public function cekAirGalon()
    {
        return $this->totalAir < 0 ? "Habis" : "Masih (" . $this->totalAir . ")";
    }

}

$g = new \Galon();
$g->adaGalon = 1;
$g->diMinum(0.5);
$g->diMinum(0.7);
$g->diMinum(1.5);
$g->diMinum(1.5);
$g->diMinum(1.5);
echo "Apakah air galon masih ada : " . $g->cekAirGalon() . "<br>";
