<?php

class Makanan {
    
    private $namaMakanan;
    protected $asalMakanan;

    public function setNamaMakanan($nama) {
    	$this->namaMakanan = $nama;
    }
    
    public function getNamaMakanan() {
	return $this->namaMakanan;
    }
   
}

class SotoAyam extends Makanan {

    public function setAsalMakanan() {
	$this->asalMakanan = 'Kab. Lamongan';
    }
    
    public function getAsalMakanan() {
	return $this->asalMakanan;
    }

}

$soto = new SotoAyam();
$soto->setNamaMakanan('Soto Ayam Lamongan');
echo "Nama Makanan : ". $soto->getNamaMakanan();
$soto->setAsalMakanan();
echo "<br>";
echo "Asal Makanan : ". $soto->getAsalMakanan();
