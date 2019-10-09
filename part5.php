<?php
//buat class laptop
class laptop {
    //buat property untuk class laptop
    public $pemiilik;
    public $merk;
    public $ukuran_layar;

    //buat method untuk class laptop
    public function hidupkan_laptop(){
        return "hidupkan laptop";
    }
    public function matikan_laptop(){
        return "matikan laptop";
    }
}
//buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
$laptop_andi = new laptop();

?>