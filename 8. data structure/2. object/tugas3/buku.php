<?php

class Buku {
    
    private $namaBuku;
    private $penulisBuku;

    public function setNamaBuku($nama) {
        $this->namaBuku = $nama;
    }
    
    public function getNamaBuku() {
        return $this->namaBuku;
    }
   
    public function setPenulisBuku($penulis) {
        $this->penulisBuku = $penulis;
    }
    
    public function getPenulisBuku() {
        return $this->penulisBuku;
    }
}

class BukuTutorialPHP extends Buku {
    
    public $judulBuku = "Tutorial PHP 1";
    public $penulis = "Appress PHP Writer";
    
    public function pinjam() {
        echo "Saya Pinjam sebuah buku<br>";
    }
}

$b = new BukuTutorialPHP();
$b->pinjam();
$b->setNamaBuku($b->judulBuku);
echo "Nama Buku : ". $b->getNamaBuku();
echo "<br>";
$b->setPenulisBuku($b->penulis);
echo "Penulis Buku : ". $b->getPenulisBuku();
