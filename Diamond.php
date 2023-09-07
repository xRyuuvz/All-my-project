<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php
      echo "<p>Kode Program PHP - Diamond Bintang (10)</p>";
      echo "<pre>";
     
      $lebar_diamond = 10;
     
      for($i = 1; $i <= $lebar_diamond; $i++) {
        for($j = 1; $j <= $lebar_diamond - $i; $j++) {
          echo " ";
        }
        for($k = 1; $k <= $i; $k++) {
          echo " *";
        }
        echo "<br>";
      }
     
      for($i = 1; $i < $lebar_diamond; $i++) {
        for($j = 1; $j <= $i; $j++) {
          echo " ";
        }
        for($k = 1; $k <= $lebar_diamond - $i; $k++) {
          echo " *";
        }
        echo "<br>";
      }
     
      echo "</pre>";
    ?>
</html>