<?php

class Aritmatika {
    public function tambah($a, $b) {
        $hasil = $a + $b;
        return "$a + $b = $hasil";
    }
    public function kurang($a, $b) {
        $hasil = $a - $b;
        return "$a - $b = $hasil";
    }
    public function kali($a, $b) {
        $hasil = $a * $b;
        return "$a * $b = $hasil";
    }
    public function pembagian($a, $b) {
        if ($b != 0) {
            $hasil = $a / $b;
            return "$a / $b = $hasil";
        } else {
            return "Tidak bisa melakukan pembagian oleh 0.";
        }
    }
    public function modulus($a, $b) {
        $hasil = $a % $b;
        return "$a % $b = $hasil";
    }
}

$kalkulator = new Aritmatika();
echo "<br> operator aritmatika <br>";
echo $kalkulator->tambah(10, 20)."<br>";
echo $kalkulator->kurang(1020, 570)."<br>";
echo $kalkulator->kali(700, 897)."<br>";
echo $kalkulator->pembagian(1000, 100)."<br>";
echo $kalkulator->modulus(7, 3)."<br>";
?>
