<?php
class nilaiSiswa {
  private $harian, $atsGanjil, $assGanjil, $atsGenap, $assGenap;

  public function setHarian($harian) {
    $this->harian = $harian;
  }
  public function getHarian() {
    return $this->harian;
  }
  public function setAtsganjil($atsGanjil) {
    $this->atsGanjil = $atsGanjil;
  }
  public function getAtsganjil() {
    return $this->atsGanjil;
  }
  public function setAssganjil($assGanjil) {
    $this->assGanjil = $assGanjil;
  }
  public function getAssganjil() {
    return $this->assGanjil;
  }
  public function setAtsgenap($atsGenap) {
    $this->atsGenap = $atsGenap;
  }
  public function getAtsgenap() {
    return $this->atsGenap;
  }
  public function setAssgenap($assGenap) {
    $this->assGenap = $assGenap;
  }
  public function getAssgenap() {
    return $this->assGenap;
  }
  public function rata2() {
    $nilairata2 = ($this->getHarian() + $this->getAtsganjil() + $this->getAssganjil() + $this->getAtsgenap() + $this->getAssgenap()) / 5;
    return $nilairata2;
  }
  public function naikKelas() {
    $nilai_rata = $this->rata2();
    if ($nilai_rata >= 75) {
      return "Naik Kelas";
    } else {
      return "Tidak Naik Kelas";
    }
  }
}

// Membuat objek siswa Akmal
$akmal = new nilaiSiswa;
$akmal->setHarian("90");
$akmal->setAtsganjil("60");
$akmal->setAssganjil("70");
$akmal->setAtsgenap("88");
$akmal->setAssgenap("70");

echo "(AKMAL) Nilai Harian Awal : " . $akmal->getHarian();
echo "<br> (AKMAL) Nilai Ats Ganjil Awal : " . $akmal->getAtsganjil();
echo "<br> (AKMAL) Nilai Aas Ganjil Awal : " . $akmal->getAssganjil();
echo "<br> (AKMAL) Nilai Ats Genap Awal : " . $akmal->getAtsgenap();
echo "<br> (AKMAL) Nilai Ass Genap Awal : " . $akmal->getAssgenap();
echo "<br> Rata-Rata Nilai : " . $akmal->rata2();
echo "<br> Status : " . $akmal->naikKelas();

// Membuat objek siswa Nabil
$nabil = new nilaiSiswa;
$nabil->setHarian("85");
$nabil->setAtsganjil("90");
$nabil->setAssganjil("88");
$nabil->setAtsgenap("90");
$nabil->setAssgenap("95");

echo "<hr><br> (NABIL) Nilai Harian Awal : " . $nabil->getHarian();
echo "<br> (NABIL) Nilai Ats Ganjil Awal : " . $nabil->getAtsganjil();
echo "<br> (NABIL) Nilai Aas Ganjil Awal : " . $nabil->getAssganjil();
echo "<br> (NABIL) Nilai Ats Genap Awal : " . $nabil->getAtsgenap();
echo "<br> (NABIL) Nilai Ass Genap Awal : " . $nabil->getAssgenap();
echo "<br> Rata-Rata Nilai : " . $nabil->rata2();
echo "<br> Status : " . $nabil->naikKelas();

// Membuat objek siswa Ruhul
$ruhul = new nilaiSiswa;
$ruhul->setHarian("88");
$ruhul->setAtsganjil("76");
$ruhul->setAssganjil("72");
$ruhul->setAtsgenap("69");
$ruhul->setAssgenap("82");

echo "<hr><br> (RUHUL) Nilai Harian Awal : " . $ruhul->getHarian();
echo "<br> (RUHUL) Nilai Ats Ganjil Awal : " . $ruhul->getAtsganjil();
echo "<br> (RUHUL) Nilai Aas Ganjil Awal : " . $ruhul->getAssganjil();
echo "<br> (RUHUL) Nilai Ats Genap Awal : " . $ruhul->getAtsgenap();
echo "<br> (RUHUL) Nilai Ass Genap Awal : " . $ruhul->getAssgenap();
echo "<br> Rata-Rata Nilai : " . $ruhul->rata2();
echo "<br> Status : " . $ruhul->naikKelas();

// Membuat objek siswa Attha
$attha = new nilaiSiswa;
$attha->setHarian("92");
$attha->setAtsganjil("85");
$attha->setAssganjil("78");
$attha->setAtsgenap("73");
$attha->setAssgenap("88");

echo "<hr><br> (ATTHA) Nilai Harian Awal : " . $attha->getHarian();
echo "<br> (ATTHA) Nilai Ats Ganjil Awal : " . $attha->getAtsganjil();
echo "<br> (ATTHA) Nilai Aas Ganjil Awal : " . $attha->getAssganjil();
echo "<br> (ATTHA) Nilai Ats Genap Awal : " . $attha->getAtsgenap();
echo "<br> (ATTHA) Nilai Ass Genap Awal : " . $attha->getAssgenap();
echo "<br> Rata-Rata Nilai : " . $attha->rata2();
echo "<br> Status : " . $attha->naikKelas();

// Membuat objek siswa Rasheed
$rasheed = new nilaiSiswa;
$rasheed->setHarian("87");
$rasheed->setAtsganjil("79");
$rasheed->setAssganjil("71");
$rasheed->setAtsgenap("71");
$rasheed->setAssgenap("85");

echo "<hr><br> (RASHEED) Nilai Harian Awal : " . $rasheed->getHarian();
echo "<br> (RASHEED) Nilai Ats Ganjil Awal : " . $rasheed->getAtsganjil();
echo "<br> (RASHEED) Nilai Aas Ganjil Awal : " . $rasheed->getAssganjil();
echo "<br> (RASHEED) Nilai Ats Genap Awal : " . $rasheed->getAtsgenap();
echo "<br> (RASHEED) Nilai Ass Genap Awal : " . $rasheed->getAssgenap();
echo "<br> Rata-Rata Nilai : " . $rasheed->rata2();
echo "<br> Status : " . $rasheed->naikKelas();
?>
