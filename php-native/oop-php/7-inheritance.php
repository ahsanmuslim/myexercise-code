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

    //membuat method
	function getInfo() {
		return "$this->warna, $this->type, $this->harga, $this->mesin, $this->merek";
	}

}

class mobilBarang extends Mobil {
    //membuat property khusus untuk kelas mobil barang 
    public  $tonase = "10 ton",
            $karoseri = "Bak terbuka";

    public function getInfoLengkap(){
        $str = "{$this->getInfo()} {$this->tonase} {$this->karoseri}";
        return $str;
    }


} 


class mobilSport extends Mobil {
    //membuat property khusus untuk kelas mobil barang 
    public  $kecepatanMaks = "300 km/jam",
            $pabrikan = "Ferari";

    public function getInfoLengkap(){
        $str = "{$this->getInfo()} {$this->kecepatanMaks} {$this->pabrikan}";
        return $str;
    }
    
}

$mobilBarang1 = new mobilBarang("Krem", "Truk Fuso", "Rp. 1.000.000.000", "Diesel", "Mitsibishi");
$mobilSport1 = new mobilSport("Silver","SUV", "RP. 400.000.000", "Premium","Ferari");

echo $mobilBarang1->getInfoLengkap();
echo "<br>";
echo $mobilSport1->getInfoLengkap();

?>