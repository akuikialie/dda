<?php

class Air {
    
    public $warnaAir = 'Tak berwarna';
    
    public function getAsalAir() {
	return "Sumber Mata Air";
    }
    
    public function getWarnaAir() {
        return $this->warnaAir;
    }
}

class AirGula extends Air {
    
    public function setWarnaAir($warna) {
	$this->warnaAir = $warna;
    }
    
    public function getAsalAir() {
        return "Campuran dari Air dengan Gula";
    }
}


$a = new AirGula();
$a->setWarnaAir('Bening Keruh');

echo $a->getWarnaAir();
echo "<br>";
echo $a->getAsalAir();
//var_dump($a);
