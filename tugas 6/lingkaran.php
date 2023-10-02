<?php
require_once 'abstract1.php';

class lingkaran extends bentuk2D{
    public $jari2;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }

    public function namaBidang(){
        return "Lingkaran";
    }

    public function luasbidang(){
       return  3.14 * $this->jari2 * $this->jari2;
       
    }

    public function keliling(){
        return 2 * 3.14 *$this->jari2;
    }
}