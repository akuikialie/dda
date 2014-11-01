<?php

class PapanTulis {

    public $sedangKotor = 'tidak';

    public function apakahKotor()
    {
        return $this->sedangKotor;
    }

    public function bersihkan()
    {
        echo "Papan tulis di bersihkan.<br>";
        $this->sedangKotor = 'tidak';
    }

    public function pakai()
    {
        echo "Papan tulis di pakai<br>";
        $this->sedangKotor = 'ya';
    }

}

$p = new PapanTulis();
echo "Apakah papan tulis kotor? " . $p->apakahKotor() . "<br>";
$p->bersihkan();
$p->pakai();
echo "Apakah papan tulis kotor? " . $p->apakahKotor() . "<br>";
$p->pakai();
