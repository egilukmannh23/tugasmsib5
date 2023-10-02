<?php
require_once 'abstract1.php';

class segitiga extends bentuk2D{
    public $alas;
    public $tinggi;
    
    public function __construct($alas, $tinggi){
        $this-> alas = $alas;
        $this-> tinggi = $tinggi;
    }
    
    public function namaBidang(){
        return 'Segitiga';
    }
    
    public function luasbidang(){
        return 0.5 * $this-> alas * $this-> tinggi;
    }

    public function keliling(){
        return 'Luas segitiga tidak bisa di hitung';
    }

    public function __toString(){
        return "" .$this->alas. "," .$this->tinggi."";

    }
}
    ?>