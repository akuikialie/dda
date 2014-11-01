<?php

class Manusia {
    
    protected $umur;
    protected $kelamin;

    public function getAsal() {
	echo "Manusia Berasal dari Tanah";
    }
}

class Pria extends Manusia {
    
    public function setKelamin() {
	$this->kelamin = "laki - laki";
    }

    public function setUmur() {
	$this->umur = "30";
    }

    public function getUmur() {
	return $this->umur;
    }
}

$p = new Pria();
$p->getAsal();
echo "<br>";
$p->setUmur();
echo "Umur Pria : ". $p->getUmur();
