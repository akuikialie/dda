<?php

class Kompor {

    private $sedangMenyala;
    private $sedangKotor;

    public function nyalakan()
    {
        if (!$this->sedangKotor) {
            if (!$this->sedangMenyala) {
                echo "Kompor menyala<br>";
                $this->sedangMenyala = true;
            } else {
                echo "Kompor sudah menyala<br>";
            }
        } else {
            echo "Kompor sedang kotor. Belum menyala<br>";
        }
    }

    public function pakai()
    {
        if ($this->sedangMenyala) {
            echo "Kompor bisa dipakai<br>";
        } else {
            echo "Kompor Belum menyala<br>";
        }
    }

    public function matikan()
    {
        if ($this->sedangMenyala) {
            echo "Kompor di matikan<br>";
            $this->sedangKotor = true;
        } else {
            echo "Kompor sudah tidak menyala<br>";
        }
    }

    public function bersihkan()
    {
        if ($this->sedangKotor) {
            echo "Bersikan Kompor dulu<br>";
        } else {
            echo "Sudah Bersih Kompornya<br>";
        }
    }

}

$k = new Kompor();
$k->nyalakan();
$k->pakai();
$k->matikan();
//$k->bersihkan();
$k->nyalakan();
