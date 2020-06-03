<?php   

class contohStatic {
    //membuat property dengan keyword static
    public static $nilai = 80;

    //membuat methods dengan keyword static
    public static function cetak (){
        //membuat method dengan keyword static
        return "Nilai Anda = ".self::$nilai++;
    }
    
}

//cara mengambil property & methods dengan keyword static tanpa melakukan instansiasi object
echo contohStatic::$nilai;
echo "<br>";
echo contohStatic::cetak();
echo "<br>","<hr>";


//mencetak nilai dengan instansiasi object
$obj1 = new contohStatic();

//mencetak nilai property & methods
echo $obj1::$nilai;
echo "<br>";
//mencetak method 
echo $obj1::cetak()."<br>";
echo $obj1::cetak()."<br>";
echo $obj1::cetak()."<br>","<hr>";

//mencetak nilai dengan instansiasi object dengan nilai akan tetap tidak di kembalikan sekalipun instasiasi object baru
$obj2 = new contohStatic();

//mencetak nilai property & methods
echo $obj2::$nilai;
echo "<br>";
//mencetak method 
echo $obj2::cetak()."<br>";
echo $obj2::cetak()."<br>";
echo $obj2::cetak()."<br>";

?>