<?php

class Kendaraan {
    
    private $namaKendaraan;
    public $jumlahRoda;

    public function setNamaKendaraan($nama) {
	$this->namaKendaraan = $nama;
    }
    
    public function getNamaKendaraan() {
	return $this->namaKendaraan;
    }
}

class Mobil extends Kendaraan {

    public function setJumlahRoda($jml) {
        $this->jumlahRoda = $jml;
    }

    public function getJumlahRoda() {
	return $this->jumlahRoda;
    }
}

$m = new Mobil();
$m->setNamaKendaraan('Mobil Avanza');
echo "Nama Kendaraan : ". $m->getNamaKendaraan();
echo "<br>";
$m->setJumlahRoda(4);
echo "Jumlah Roda : ". $m->getJumlahRoda();
