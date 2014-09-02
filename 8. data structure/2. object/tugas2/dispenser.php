<?php

class Dispenser {

    private $apakahMenyala;
    public $bisaAirPanas;
    public $bisaAirDingin;

    public function nyalakan() {
	echo "Dispenser menyala.<br>";
    	$this->apakahMenyala = true;
    }

    public function matikan() {
	echo "Dispenser mati.<br>";
        $this->apakahMenyala = false;
    }

    public function ambilAirPanas() {
	if($this->bisaAirPanas) {
	    if($this->apakahMenyala) {
	        echo "Silahkan minum air panas.<br>";
	    } else {
	        echo "Maaf, Dispenser belum menyala.<br>";
	    }
	} else {
    	    echo "Dispenser tidak bisa untuk air Panas<br>";
	}
    }

    public function ambilAirDingin() {
	if($this->bisaAirDingin) {
	    if($this->apakahMenyala) {
	        echo "Silahkan minum air dingin.<br>";
	    } else {
	        echo "Maaf, Dispenser belum menyala.<br>";
	    }
	} else {
    	    echo "Dispenser tidak bisa untuk air Dingin<br>";
	}
    }


}


$d = new \Dispenser();
$d->bisaAirPanas = true;
$d->bisaAirDingin = true;
$d->nyalakan();
$d->ambilAirPanas();
$d->ambilAirDingin();
$d->matikan();
$d->ambilAirPanas();
