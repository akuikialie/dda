<?php

class Bangunan {
    
    protected $jenisBangunan;

    public function getJenisBangunan() {
        return $this->jenisBangunan;
    }    

}

class Jembatan extends Bangunan {

    public function setJenisBangunan() {
        $this->jenisBangunan = "Jembatan";
    }
}

$b = new Jembatan();
$b->setJenisBangunan();
echo "Jenis Bangunan : ". $b->getJenisBangunan();
