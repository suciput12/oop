<?php
 
 class RPL2
 {
     public $siswa ="35";
     public $laki ="23";
     public $cw ="15";
     public $yangbawalaptop="7";
     public $motor="18";

     public function sekolah()
        {
            return "sekolah saya di smk assalam bandung";

        }

        public function JURUSAN()
        {
            return "rpl2";

        }
        $rpl2 = New RPL2();
        $rpl2 -> siswa="15";
        echo"siswa di kelas rpl2 ada $rpl2 -> siswa<br>";
        
 }