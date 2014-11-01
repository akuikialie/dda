<?php

class Keyboard {
	
    private $jenis;
    
    public function setJenisKeyboard($jenis) {
        $this->jenis = $jenis;
    }
    
    public function getJenisKeyboard() {
	return $this->jenis;
    }
}

class KeyboardQwertyUsb extends Keyboard {
    
    public $port;

    public function setPort() {
	$this->port = "USB";
    }

    public function getPort() {
	return $this->port;
    }

}


$k = new KeyboardQwertyUsb();
$k->setJenisKeyboard('Keyboard USB');
echo "Jenis Keyboard : ". $k->getJenisKeyboard();
echo "<br>";
$k->setPort();
echo "Port Keybord : ".$k->getPort();
