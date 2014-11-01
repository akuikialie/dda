<?php

class Rumah {

    public $materialSiap;
    private $rancanganSiap;
    protected $siapBangunRumah;

    public function beliMaterial()
    {
        if ($this->materialSiap) {
            echo "Material siap<br>";
            $this->rancanganSiap = true;
        } else {
            echo "Material tidak siap<br>";
        }
    }

    public function rancangRumah()
    {
        if ($this->rancanganSiap) {
            echo "Rancangan rumah siap<br>";
            $this->siapBangunRumah = true;
        } else {
            echo "Rancangan rumah belum siap<br>";
        }
    }

    public function bangunRumah()
    {
        if ($this->siapBangunRumah) {
            echo "Bangun Rumah<br>";
        } else {
            echo "Tidak bangun Rumah<br>";
        }
    }

}

$r = new Rumah();
$r->materialSiap = false;
$r->beliMaterial();
$r->rancangRumah();
$r->bangunRumah();
