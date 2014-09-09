<?php

class Sepatu {

    private $apakahBau = 'Tidak';

    public function apakahBau() {
        echo "Apakah bau? " . $this->apakahBau . "<br>";
    }

    public function pakai() {
	echo "Pakai Sepatu<br>";
    }

    public function hujan() {
	$this->apakahBau = 'Iya';
        echo "sepatu terkena hujan<br>";
    }
	
    public function cuci() {
        $this->apakahBau = 'Tidak';
	echo "Sepatu di cuci<br>";
    }    
}


$s = new Sepatu();
$s->apakahBau();
$s->pakai();
$s->hujan();
$s->apakahBau();
$s->pakai();
$s->apakahBau();
$s->cuci();
$s->apakahBau();
