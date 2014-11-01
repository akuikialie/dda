<?php

class Kompor {

    public $merk;
    public $warna;
    public $kotor;
    public $sedangDiPakai;
    public $sedangDiCuci;

    public function diPakai()
    {
        echo "Sedang Di Pakai";
        $this->sedangDiPakai = "ya";
    }

    public function diCuci()
    {
        echo "Sedang Di Cuci";
        $this->sedangDiCuci = "ya";
    }

    public function cekKeadaan()
    {
        $out = array($this->sedangDiCuci, $this->sedangDiPakai);
        return $out;
    }

}
