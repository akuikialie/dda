<?php

class Listrik {
    
    public $jenisListrik;

    public function setJenis($jl) {
	$this->jenisListrik = $jl;
    }

    public function getJenis() {
	return $this->jenisListrik;
    }

}

class ListrikDC extends Listrik{
    
    public $istilahListrik = "Listrik Arus Bolak-Balik (DC)";

    public function getIstilahListrik() {
	return $this->istilahListrik;
    }
}

$dc = new ListrikDC();
echo "Sebutan : ". $dc->getIstilahListrik();
$dc->setJenis("DC");
echo "<br>";
echo "Jenis : ". $dc->getJenis();
