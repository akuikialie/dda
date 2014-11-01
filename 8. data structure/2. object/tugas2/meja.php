<?php

class Meja {

    public $apakahKotor = false;

    public function apakahKotor()
    {
        if ($this->apakahKotor) {
            echo "Meja sedang kotor<br>";
        } else {
            echo "Meja sudah bersih<br>";
        }
    }

    public function pakai()
    {
        if ($this->apakahKotor) {
            echo "Maaf, meja sedang kotor<br>";
        } else {
            echo "Meja dipakai<br>";
            $this->apakahKotor = true;
        }
    }

    public function bersihkan()
    {
        if ($this->apakahKotor) {
            echo "Meja Dibersihkan<br>";
            $this->apakahKotor = false;
        } else {
            echo "Meja sudah bersih<br>";
        }
    }

}

$m = new Meja();
$m->apakahKotor();
$m->pakai();
$m->apakahKotor();
$m->pakai();
$m->bersihkan();
$m->apakahKotor();
