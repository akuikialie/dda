<?php

class Pintu {

    private $sudahTerbuka = false;

    public function bukaPintu()
    {
        if ($this->sudahTerbuka) {
            echo "Pintu di buka<br>";
        } else {
            echo "Pintu tutup<br>";
        }
    }

    public function apakahTerbuka()
    {
        if ($this->sudahTerbuka) {
            echo "Pintu bisa di buka<br>";
        } else {
            echo "Pintu masih tertutup<br>";
        }
    }

    public function bukaKunci()
    {
        if ($this->sudahTerbuka) {
            echo "Kunci pintu dibuka<br>";
            $this->sudahTerbuka = false;
        } else {
            echo "Pintu sudah terbuka<br>";
            $this->sudahTerbuka = true;
        }
    }

}

$p = new Pintu();
$p->bukaPintu();
$p->apakahTerbuka();
$p->bukaKunci();
$p->apakahTerbuka();
$p->bukaPintu();
