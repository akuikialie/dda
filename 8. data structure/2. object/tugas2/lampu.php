<?php

class Lampu {

    private $sedangMenyala;

    public function nyalakan()
    {
        echo "Lampu di nyalakan<br>";
        $this->sedangMenyala = true;
    }

    public function apakahMenyala()
    {
        if ($this->sedangMenyala) {
            return "iya<br>";
        } else {
            return "tidak<br>";
        }
    }

    public function matikan()
    {
        echo "Lampu dimatikan<br>";
        $this->sedangMenyala = false;
    }

}

$l = new Lampu();
$l->nyalakan();
echo "Apakah lampu sudah menyala? " . $l->apakahMenyala();
$l->matikan();
echo "Apakah lampu sudah menyala? " . $l->apakahMenyala();
