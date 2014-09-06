<?php

class Gas {

    public $apakahKaretRusak;
    protected $apakahSiapPakai;

    public function pasangRegulator()
    {
        if ($this->apakahKaretRusak) {
            echo "Silahkan cek kembali regulator anda.<br>";
        } else {
            echo "Pemasangan regulator sudah benar.<br>";
        }
    }

    public function cekBauGas()
    {
        if ($this->apakahKaretRusak) {
            echo "Tercium bau gas LPG.<br>";
        } else {
            $this->siapPakai = true;
        }
    }

    public function gantiKaret()
    {
        if ($this->apakahKaretRusak) {
            echo "Karet sudah diganti.<br>";
        } else {
            echo "Karet tidak perlu diganti.<br>";
        }
        $this->apakahKaretRusak = false;
    }

    public function pakai()
    {
        if ($this->apakahKaretRusak && $this->siapPakai) {
            echo "Maaf, Gas LPG tidak bisa digunakan.<br>";
        } else {
            echo "Siap Pakai.<br>";
        }
    }

}

$gs = new \Gas();
$gs->apakahKaretRusak = true;
$gs->pasangRegulator();
$gs->cekBauGas();
$gs->gantiKaret();
$gs->pasangRegulator();
$gs->cekBauGas();
$gs->pakai();
