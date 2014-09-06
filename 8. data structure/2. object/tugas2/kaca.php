<?php

class Kaca {

    private $sedangKotor;

    public function bersihkan()
    {
        $this->sedangKotor = "tidak";
    }

    public function apakahMasihKotor()
    {
        echo "Apakah masih kotor? " . $this->sedangKotor . "<br>";
    }

}

$k = new Kaca();
$k->bersihkan();
$k->apakahMasihKotor();

