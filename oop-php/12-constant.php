<?php

//membuat konstanta dengan DEFINE --> hanya bisa dibuat di luar kelas 
define ("NAMA","Ahmad Susanto");
echo NAMA;
echo "<br><hr>";

//kalo ingin membuat di dalam kelas maka gunakan CONST
class konstanta {

    public $namaClass = __CLASS__;

    const SKILL = "Web Developer & Design";

    public function cetakClass (){
        return __METHOD__;

    }
    
    public function cetakFunction (){
        return __FUNCTION__;
    }
    

}

//cara mencetak konstanta dengan keyword CONST dari luar kelas
echo konstanta::SKILL;
echo "<br><hr>";

$obj1 = new konstanta();

//magic constant yang ada di PHP secara default
echo "Contoh konstanta FILE : ".__FILE__;
echo "<br>";
echo "Contoh konstanta LINE : ".__LINE__;
echo "<br>";
echo "Contoh konstanta DIR : ".__DIR__;
echo "<br>";
echo "Contoh konstanta CLASS : ".$obj1->namaClass;
echo "<br>";
echo "Contoh konstanta METHOD : ".$obj1->cetakClass();
echo "<br>";
echo "Contoh konstanta FUNCTION : ".$obj1->cetakFunction();
echo "<br>";

//dan lain-lain seperti __TRAIT__ atau __NAMESPACE__



?>