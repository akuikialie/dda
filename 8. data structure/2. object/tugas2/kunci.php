<?php

class kunci {

    public $adaKunci;
    private $apakahPintuBisaTerbuka;

    public function cobaBuka()
    {
        if (!$this->apakahPintuBisaTerbuka) {
            if ($this->adaKunci <= 0) {
                echo "Maaf, semua kunci tidak bisa dipergunakan";
            } else {
                echo "Coba Buka pintu<br>";
                --$this->adaKunci;
                if ($this->adaKunci == 0) {
                    $this->apakahPintuBisaTerbuka = true;
                }
            }
        } else {
            echo "Maaf, pintu sudah terbuka<br>";
        }
    }

    public function masuk()
    {
        if ($this->apakahPintuBisaTerbuka) {
            echo "Silahkan masuk<br>";
        } else {
            echo "Maaf, buka pintu dengan kunci dahulu<br>";
        }
    }

}

$k = new kunci();
$k->adaKunci = 3;
$k->cobaBuka();
$k->cobaBuka();
$k->cobaBuka();
$k->cobaBuka();
$k->masuk();
