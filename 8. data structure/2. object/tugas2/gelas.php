<?php

class Gelas {

    private $sedangDiPakai;
    private $apakahKotor = true;

    public function pakai()
    {
        if ($this->apakahKotor) {
            echo "Gelas sedang saya pakai<br>";
            $this->apakahKotor = true;
        } else {
            echo "Gelas tidak sedang saya pakai<br>";
            $this->apakahKotor = false;
        }
    }

    public function cuci()
    {
        if (!$this->apakahKotor) {
            echo "Maaf, Gelas sedang di cuci<br>";
        } else {
            echo "Cuci deh!!";
        }
    }

}

$g = new \Gelas();
$g->pakai();
$g->pakai();




