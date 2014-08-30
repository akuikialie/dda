<?php

class Atap {

    public $merk;
    public $bahan;
    public $panjang;
    public $lebar;
    public $tebal;
    public $bentuk;
    public $sedangBocor;
    public $sedangRusak;

    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    public function setBahan($bahan)
    {
        $this->bahan = $bahan;
    }

    public function setPanjang($panjang)
    {
        $this->panjang = $panjang;
    }

    public function setLebar($lebar)
    {
        $this->lebar = $lebar;
    }

    public function setTebal($tebal)
    {
        $this->tebal = $tebal;
    }

    public function setBentuk($bentuk)
    {
        $this->bentuk = $bentuk;
    }

    public function hitungLuas()
    {
        $luas = 0.0;
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    public function sedangBocor()
    {
        $this->sedangBocor = 'iya';
        return "Sedang Bocor";
    }

    public function sedangRusak()
    {
        $this->sedangRusak = 'iya';
        return "Sedang Rusak";
    }

    public function apakahBisaDiPasang()
    {
        if ($this->sedangBocor != NULL || $this->sedangRusak != NULL) {
            echo "Tidak bisa di pasang";
        }
    }

}
