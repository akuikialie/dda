<?php

class Atap {

    public $jenis;
    public $bahan;
    public $panjang;
    public $lebar;
    public $harga;
    public $jumlah;
    protected $luas;
    private $bayar;
    private $bisaDiHitung;

    public function sayaBeliAtapBaru()
    {
        echo "Saya Beli Atap<br>";
    }

    public function simpanNota()
    {
        $cekList = 0;
        if (empty($this->jenis)) {
            echo "Jenis nya Apa ya??<br>";
            $cekList++;
        }
        if (empty($this->bahan)) {
            echo "Bahan nya Apa ya??<br>";
            $cekList++;
        }
        if (empty($this->panjang)) {
            echo "Panjangnya berapa??<br>";
            $cekList++;
        }
        if (empty($this->lebar)) {
            echo "Lebarnya berapa??<br>";
            $cekList++;
        }
        if (empty($this->harga)) {
            echo "Harganya berapa??<br>";
            $cekList++;
        }
        if (empty($this->jumlah)) {
            echo "Jumlahnya Berapa??<br>";
            $cekList++;
        }
        if ($cekList === 0) {
            echo "Catatan sudah benar<br>";
            $this->bisaDiHitung = true;
        }
    }

    public function hitungLuasTiapAtap()
    {
        echo "<br>";
        if ($this->bisaDiHitung) {
            echo "Panjang : " . $this->panjang . "m<br>";
            echo "Lebar : " . $this->lebar . "m<br>";
            $this->luas = $this->panjang * $this->lebar;
            echo "Luas Tiap Atap : " . $this->luas . "m<br>";
        } else {
            echo "Tidak Bisa Menghitung Luas<br>";
        }
    }

    public function hitungTotalBayar()
    {
        echo "<br>";
        if ($this->bisaDiHitung) {
            echo "Harga Tiap Atap : " . $this->harga . "<br>";
            echo "Jumlah Atap : " . $this->jumlah . "<br>";
            $this->bayar = $this->harga * $this->jumlah;
            echo "Total Harga : " . $this->bayar . "<br>";
        } else {
            echo "Tidak Bisa Menghitung Total Bayar<br>";
        }
    }

}

$atap = new Atap();
$atap->sayaBeliAtapBaru();
$atap->jenis = "Atap Rumah";
$atap->bahan = "Asbes";
$atap->panjang = 4; // 4 Meter
$atap->lebar = 1.5; // 1.5 Meter
$atap->harga = 125000; // Rp. 125,000
$atap->jumlah = 5; // 5 Buah
$atap->simpanNota();

$atap->hitungLuasTiapAtap();
$atap->hitungTotalBayar();
