<?php

class kasur {
    public $maxPakai;
    private$nilaiPakai = 0;

    public function pakai() {
	if($this->nilaiPakai < $this->maxPakai) {
	    echo "Kasur Bisa dipakai<br>";
	    ++$this->nilaiPakai;
	} else{
	    echo "Kasur tidak bisa dipakai<br>";
	}
    }
    
    public function apakahPerluJemur() {
	if($this->nilaiPakai >= $this->maxPakai) {
            return "Iya<br>";
	} else {
	    return "Tidak<br>";
	}
    }
    
    public function jemur() {
	$this->nilaiPakai = 0;
	echo "Kasur sudah di jemur<br>";
    }	
}

$k = new Kasur();
$k->maxPakai = 3;
$k->pakai();
$k->pakai();
$k->pakai();
$k->pakai();
echo "Apakah sudah waktunya di jemur? ". $k->apakahPerluJemur();
$k->jemur();
echo "Apakah sudah waktunya di jemur? ". $k->apakahPerluJemur();
$k->pakai();
