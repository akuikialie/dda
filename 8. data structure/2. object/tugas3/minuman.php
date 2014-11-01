<?php

class Minuman {
    
    protected $jenisMinuman;
    protected $warnaMinuman;
    private $namaMinuman;

    public function setNamaMinuman($nama) {
	$this->namaMinuman = $nama;
    }
 
    public function getNamaMinuman() {
	return $this->namaMinuman;	
    }

}

class Jus extends Minuman {
   
    public function setJenisMinuman(){
	$this->jenisMinuman = 'JUS';
    }

    public function getJenisMinuman() {
	return $this->jenisMinuman;
    }

    public function setWarnaMinuman() {
	$this->warnaMinuman = 'Berwarna - warni';
    }

    public function getWarnaMinuman() {
	return $this->warnaMinuman;
    }

}

$j = new Jus();
$j->setNamaMinuman("Jus Mangga");
echo "Nama Minuman : ". $j->getNamaMinuman();
echo "<br>";
$j->setJenisMinuman();
echo "Jenis Minuman : ". $j->getJenisMinuman();
echo "<br>";
$j->setWarnaMinuman();
echo "Warna Minuman : ". $j->getWarnaMinuman();
echo "<br>";
