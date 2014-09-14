<?php

class Jalan {
    
    private $jenisJalan;
    protected $pangkalJalan;
    protected $ujungJalan;

    public function setJenisJalan($jenis) {
        $this->jenisJalan = $jenis;
    }
    
    public function getJenisJalan() {
        return $this->jenisJalan;
    }
}

class JalanProvinsi extends Jalan {
    
    public $jenisJalan = 'ASPAL';

    public function setUjung() {
	$this->ujungJalan = 'Jakarta';
    }

    public function setPangkal() {
	$this->pangkalJalan = 'Banyuwangi';
    }

    public function getUjung() {
	return $this->ujungJalan;
    }

    public function getPangkal() {
        return $this->pangkalJalan;
    }
}

$j = new JalanProvinsi();
$j->setJenisJalan($j->jenisJalan);
echo "jenis jalan : ". $j->getJenisJalan();
echo "<br>";
$j->setUjung();
echo "Ujung jalan : ". $j->getUjung();
echo "<br>";
$j->setPangkal();
echo "Pangkal jalan : ". $j->getPangkal();;
