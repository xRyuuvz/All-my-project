<?php
  echo "<p>Kode Program PHP - Segitiga Bintang (10)</p>";
  echo "<pre>";
 
  $tinggi_segitiga = 10
  ;
  for($i = 1; $i <= $tinggi_segitiga; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo " *";
    }
    echo "<br>";
  }
 
  echo "</pre>";
?>