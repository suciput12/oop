<?php

    class mobil{
        public $merk;
        public $pemilik;
        public $jenis;

        function hidupkan_mobil() {
            return "Hidupkan mobil";
          }
        }
        
          $mobil_suci = new mobil();
          $mobil_suci->pemilik="suci";
          $mobil_suci->merk="toyota";
          $mobil_suci->jenis="sedan";

            echo $mobil_suci->pemilik;
            echo "<br />";
            echo $mobil_suci->merk;
            echo "<br />";
            echo $mobil_suci->jenis;
            echo "<br />";

            
            echo $mobil_suci->hidupkan_mobil();
            echo "<br />";
                       
        
    
?>