<?php

class BahanBakar {

    private $kadarOktan;

    public function setKadarOktan($oktan) {
	$this->kadarOktan = $oktan;
    }
    
    public function getKadarOktan() {
	return $this->kadarOktan;
    }
}

class Premium extends BahanBakar{
    
    public function getNamaBahanBakar() {
	echo "Premium<br>";
    }

}

$p = new Premium();
$p->getNamaBahanBakar();
$p->setKadarOktan(88);
echo "Kadar Oktan dari Premium : ".$p->getKadarOktan();
