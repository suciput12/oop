<?php
    //1 class adalah sebuah blueprint/template 
    //class membuat instance dan object
    //2 class mendefinikasikan object
    //3 class menyimpan data(propety)dan
    // prilaku kucing
    
    //membuat class dalam dengan nama kucing
    class kucing
    {
        //membuat property
        public $warna ="coklat";
        public $jml_kaki =4;
        public $mkn_fav="pindang";

        //membuat method dengan nama bersuara
        public function bersuara()
        {
            return "miawww";
        }
    }

    //membuat objek baru
    $kucing1 = new kucing();
   // var_dump($kucing1);
   //$kucing -> warna="oren";
   echo "warna kucing"
