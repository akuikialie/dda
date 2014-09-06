<?php

class Handphone {

    private $sedangMenyala;
    protected $apakahAdaSinyal;

    public function nyalakan()
    {
        echo "Nyalakan HP<br>";
        $this->sedangMenyala = true;
        $this->apakahAdaSinyal = false;
    }

    public function cekSinyal()
    {
        if ($this->sedangMenyala) {
            echo "Cek Sinyal<br>";
            $this->apakahAdaSinyal = true;
        } else {
            echo "Maaf, tolong nyalakan HP.<br>";
        }
    }

    public function telpon()
    {
        if ($this->apakahAdaSinyal) {
            echo "Telpon deh!<br>";
        } else {
            echo "Tidak ada sinyal<br>";
        }
    }

    public function matikan()
    {
        echo "Matikan HP<br>";
        $this->sedangMenyala = false;
        $this->apakahAdaSinyal = false;
    }

}

$h = new Handphone();
$h->nyalakan(); // Nyalakan HP
$h->cekSinyal(); // cek sinyal HP
$h->telpon(); // Telpon seseorang
$h->matikan(); // Matikan Hp
