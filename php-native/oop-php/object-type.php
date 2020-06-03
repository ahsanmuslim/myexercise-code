<?php   

class Mobil {
    //membuat property dari class Mobil 
    public  $warna,
            $type,
            $harga,
            $mesin,
            $merek;

    //membuat method konstruktor
    public function __construct ($warna = "Hitam metalic", $type = "MPV", $harga = "Rp. 200.000.000", $mesin = "Bensin", $merek = "Toyota Avanza") {

        //memasukan nilai parameter ke dalam property kelas Mobil 
        $this->warna = $warna;
        $this->type = $type;
        $this->harga = $harga;
        $this->mesin = $mesin;
        $this->merek = $merek;

    } 

    //mengembalikan nilai property
    public function getInfo (){
        return "$this->warna, $this->type, $this->harga, $this->mesin, $this->merek";
    }

}

$mobil1 = new Mobil("Merah marun", "SUV", "Rp. 300.000.000", "Premium", "Honda Jazz");
$mobil2 = new Mobil();


class cetakSpekMobil {

    //membuat method untuk mencetak info langkap Mobil 
    public function cetak ( Mobil $mobil ){
        $str = "Info produk : {$mobil->getInfo()}";
        return $str;
    }

}

$infoMobil = new cetakSpekMobil();

echo $infoMobil->cetak($mobil1); 
echo "<br>";
echo $infoMobil->cetak($mobil2); 


?>