<?php

class Bantal {

    public $merk;
    public $bahan;
    public $harga;
    public $jumlah;
    public $sedangKotor;
    public $sedangBau;
    public $sedangDiCuci;

    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    public function setBahan($bahan)
    {
        $this->bahan = $bahan;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function setJumlah($jumlah)
    {
        $this->jumlah = $jumlah;
    }

    public function sedangDiCuci()
    {
        $this->sedangDiCuci = 'iya';
        return "Sedang Di Cuci";
    }

    public function sedangKotor()
    {
        $this->sedangKotor = 'iya';
        return "Sedang Kotor";
    }

    public function sedangBau()
    {
        $this->sedangBau = 'iya';
        return "Sedang Bau";
    }

    public function apakahBisaDiPakai()
    {
        if ($this->sedangBau != NULL || $this->sedangDiCuci != NULL || $this->sedangKotor != NULL) {
            echo "Tidak bisa di pakai";
        } else {
            echo "Bisa Di Pakai";
        }
    }

}
