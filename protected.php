<?php

    class laptop {
        protected $pemilik;

        protected function hidupkan_laptop(){
            return "hidupkan laptop";

        }
    }
    $laptop_anto = new laptop();
    $laptop_anto->pemilik="Anto";
    echo $laptop_anto->pemilik;

    echo $laptop_anto->hidupkan_laptop();

?>