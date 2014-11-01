<?php

class AlasKaki {
 
    protected $jenisAlasKaki;
    protected $ukuranAlasKaki;

    public function apakahBertali() {
        return 'Alas Kaki bertali<br>';
    }
 
}

class Sandal extends AlasKaki {
    private $jenis = 'Sandal';
    
    public function aturJenisAlasKaki() {
        $this->jenisAlasKaki = $this->jenis;
    }

    public function getJenisAlasKaki() {
        return "Jenis Alas kaki : ". $this->jenisAlasKaki;
    }
    
    public function apakahBertali() {
        return 'Sandal tidak bertali<br>';
    }

    public function aturUkuranAlasKaki($ukuran) {
        $this->ukuranAlasKaki = $ukuran;
    }

    public function getUkuranAlasKaki() {
        return "Ukuran : ". $this->ukuranAlasKaki;;
    }
}

$a = new Sandal();
$a->aturJenisAlasKaki();
echo $a->getJenisAlasKaki();
echo "<br>";
$a->aturUkuranAlasKaki(40);
echo $a->getUkuranAlasKaki();
echo "<br>";
echo $a->apakahBertali();

//var_dump($a);
