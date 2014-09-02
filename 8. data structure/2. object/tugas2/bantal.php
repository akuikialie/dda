<?php

class Bantal {
    private $apakahKotor = false;
    private $jumlahPemakaian = 5;
    
    public function maxPakai($maxPakai) {
        $this->jumlahPemakaian = $maxPakai;
        echo "Max Pakai : ". $this->jumlahPemakaian."<br>";
    }

    public function pakai() {
        if($this->jumlahPemakaian > 0) {
            echo "Siap Pakai<br>";
            --$this->jumlahPemakaian;
        } else {
            echo "Maaf, sudah waktunya untuk di cuci<br>";
            $this->apakahKotor = true;
        }
    }
    
    public function cuci() {
        if($this->apakahKotor) {
            echo "Bantal sedang di cuci<br>";
        } else {
            echo "Bantal sudah di cuci<br>";
        }

    }
}


$bantal = new Bantal();
$bantal->maxPakai(2);
$bantal->pakai();
$bantal->pakai();
$bantal->pakai();
$bantal->cuci();
// $bantal->maxPakai(1);
$bantal->pakai();
