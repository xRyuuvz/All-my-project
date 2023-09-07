<?php
  class barang{
    var $nama;
    var $warna;

    function nama($nama){
        $this->nama = $nama;
    }
    function warnalaptop($warna){
        $this->warna = $warna;
    }
  }
 
  $laptop = new barang();

  echo $laptop->nama = "lenovo";
  echo $laptop->nama($laptop->nama);
  echo "<br>";

  echo $laptop->warna = "hitam";
  echo $laptop->warnalaptop($laptop->warna);
  echo "<br>";
  echo "<br>";

  $tv = new barang();
  echo $tv->nama = "LG";
  echo $tv->nama($tv->nama);
  echo "<br>";

?>