<?php

class Kamar {

    private $didalamKamar;
    protected $apakahBau = true;

    public function masukKamar()
    {
        echo "Masuk kamar<br>";
        $this->didalamKamar = true;
    }

    public function apakahBau()
    {
        if ($this->apakahBau) {
            return "Bau!!<br>";
        } else {
            return "tidak bau!!<br>";
        }
    }

    public function semprotPengharum()
    {
        echo "Semprotkan pengharum<br>";
        $this->apakahBau = false;
    }

    public function keluarKamar()
    {
        if ($this->apakahBau) {
            echo "Kamarnya bau, jadi keluar saja<br>";
        } else {
            echo "Kamarnya sudah tidak bau, keluar kamar saja.<br>";
        }
    }

}

$k = new Kamar();
$k->masukKamar();
echo "Apakah kamarnya masih bau? " . $k->apakahBau();
$k->semprotPengharum();
echo "Apakah kamarnya masih bau? " . $k->apakahBau();
$k->keluarKamar();
