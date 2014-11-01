<?php

class Keramik {
    
    private $hargaKeramik;
    
    public function setHarga($harga) {
	$this->hargaKeramik = $harga;
    }
    
    public function getHarga() {
        return $this->hargaKeramik;
    }

}

class KeramikPlatinum extends Keramik {
   
    public $hargaKeramik = 39000;

    public function getNamaKeramik() {
	echo "Nama Keramik : Keramik Platinum<br>";
    }
}

$k = new KeramikPlatinum();
$k->getNamaKeramik();
$k->setHarga($k->hargaKeramik);
echo "Harga Keramik : ". $k->getHarga();
