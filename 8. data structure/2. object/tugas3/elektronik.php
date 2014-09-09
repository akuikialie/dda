<?php

class Elektronik {
	
    private $namaEletronik;
    private $merkElektronik;
    public $fungsiElektronik;

    public function getNamaElektronik() {
        return $this->namaElektronik;
    }

    public function setNamaElektronik($nama) {
        $this->namaElektronik = $nama;
    }

    public function getMerkElektronik() {
        return $this->merkElektronik;
    }

    public function setMerkElektronik($merk) {
        $this->merkElektronik = $merk;
    }
}

class Televisi extends Elektronik {
    
    public function setFungsi($fungsi){
        $this->fungsiElektronik = $fungsi;
    }
    
    public function getFungsi() {
        return $this->fungsiElektronik;
    }
}




$e = new Televisi();
$e->setNamaElektronik('Televisi');
echo $e->getNamaElektronik();
echo "<br>";
$e->setMerkElektronik('Toshiba');
echo $e->getMerkElektronik();
echo "<br>";
$e->setFungsi('Nonton Film');
echo $e->getFungsi();

//var_dump($e);
