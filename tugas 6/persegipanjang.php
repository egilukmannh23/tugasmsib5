<?php
require_once  'abstract1.php';

class persegiPanjang extends bentuk2D {
    public $panjang;
    public $lebar;

    public function __construct ($panjang, $lebar){
        $this-> panjang = $panjang;
        $this-> lebar = $lebar;
    }

    public function namaBidang(){
        return 'Persegi Panjang';
    }

    public function luasBidang(){
        return $this-> panjang * $this-> lebar;
    }

    public function keliling(){
        return 2 * ($this-> panjang * $this-> lebar);
    }
}
?>
