<?php

$batas_bawah = 1000;
$batas_atas = 10000;

for($a=$batas_bawah;$a<=$batas_atas;$a++){ 
     $k=0;
     for($b=1;$b<=$a;$b++){ 
         if($a % $b == 0){ 
             $k++;
         }
     }
     if($k == 2){ 
         echo $a.',';
     }
 }
  
?>
