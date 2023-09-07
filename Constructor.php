<?php
  class Manusia {
    var $namalengkap;
    var $warnarambut;
    var $umur;
 
       function tampildata($tambahUmur) {
        $this->umur= 10;
        $this->umur= $this->umur + $tambahUmur;
        return $this->umur;

        function __construct() {
            echo "Saya konstruktor";
        }

        function __destruct() {
            echo "saya destruktor";
        }
       }
  }

$objek1 = new Manusia();
//echo $objek1->tampilData(12);
$objek2 = new Manusia();
?>