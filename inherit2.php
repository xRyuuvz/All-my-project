<?php
include("inherit1.php");
// Kelas Turunan Pertama (Subclass)
class GameDesigner extends GameDeveloper {
    private $spesialisasi;

    public function __construct($nama, $pengalaman, $spesialisasi) {
        parent::__construct($nama, $pengalaman);
        $this->spesialisasi = $spesialisasi;
    }

    public function getInfo() {
        $infoInduk = parent::getInfo();
        return "Game Designer - " . $infoInduk . ", Spesialisasi: {$this->spesialisasi}";
    }
}

// Kelas Turunan Kedua (Subclass)
class GameProgrammer extends GameDeveloper {
    private $bahasaPemrograman;

    public function __construct($nama, $pengalaman, $bahasaPemrograman) {
        parent::__construct($nama, $pengalaman);
        $this->bahasaPemrograman = $bahasaPemrograman;
    }

    public function getInfo() {
        $infoInduk = parent::getInfo();
        return "Game Programmer - " . $infoInduk . ", Bahasa Pemrograman: {$this->bahasaPemrograman}";
    }
}

// Membuat objek game developer
$developer1 = new GameDesigner("Alice", 5, "Game Art");
$developer2 = new GameProgrammer("Bob", 7, "C++");

// Menampilkan informasi
echo $developer1->getInfo() . "<br>";
echo $developer2->getInfo() . "<br>";
?>

