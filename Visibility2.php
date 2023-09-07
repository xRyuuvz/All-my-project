<?php
class visibility{
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';
    
    function CetakProperti(){
        echo "akses dari dalam class <br>";
        echo "public : ".$this->public."<br>";
        echo "protected : ".$this->protected."<br>";
        echo "private : ".$this->private."<br>";
    }

    public function tampilprotected($NilaiProtected) {
        return $this->protected=$NilaiProtected;
    }

    public function tampilprivate($NilaiPrivate) {
        return $this->private=$NilaiPrivate;
    }
}

$obj = new visibility();
$obj->CetakProperti();
echo "<br> pengaksesan dari luar class <br>";
echo "public : ".$obj->public."<br>"; // OK
echo "protected : ".$obj->tampilprotected("gw protector nih boss")."<br>"; 
echo "private : ".$obj->tampilprivate("private boss jangan di intip"); 
