<?php

class Jendela {
    
    private $sedangHujan;

    public function bukaJendela() {
        if($this->sedangHujan) {
            echo "Air Masuk ke dalam Rumah<br>";
        } else {
            echo "Air tidak Masuk ke dalam Rumah<br>";
        }
    }
    
    public function terjadiHujan() {
	echo "Sedang terjadi hujan<br>";
	$this->sedangHujan = true;
    }

    public function tutupJendela() {
	echo "Jendela di tutup";
    }
    
}

$j = new Jendela();
//$j->terjadiHujan();
$j->bukaJendela();
$j->tutupJendela();
