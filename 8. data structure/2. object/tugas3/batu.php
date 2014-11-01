<?php

class Batu {
 
    protected $asalBatu;
    protected $ukuranBatu;

    public function getSifatBatu() {
	echo "Sifat batu : keras, punya kekuatan berhatan dari suhu tinggi & rendah.<br>";
    }

    public function getAsalBatu() {
        return $this->asalBatu;
    }

    public function getUkuranBatu() {
        return $this->ukuranBatu;
    }
}

class BatuSungai extends Batu {
    
    public function setAsalBatu() {
	$this->asalBatu = 'sungai<br>';
    }
   
    public function setUkuranBatu() {
        $this->ukuranBatu = 'Besar<br>';
    }
}

$b = new BatuSungai();
$b->getSifatBatu();
$b->setAsalBatu();
$b->setUkuranBatu();
echo "Asal Batu : ". $b->getAsalBatu();
echo "Ukuran Batu : ". $b->getUkuranBatu();
