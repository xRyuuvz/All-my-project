<?php
class GameDeveloper {
    protected $nama;
    protected $pengalaman;

    public function __construct($nama, $pengalaman) {
        $this->nama = $nama;
        $this->pengalaman = $pengalaman;
    }

    public function getInfo() {
        return "Nama: {$this->nama}, Pengalaman: {$this->pengalaman} tahun";
    }
}
?>